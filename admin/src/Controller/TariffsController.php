<?php

namespace Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormFactoryInterface as FormFactoryInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Stalker\Lib\Core\Config;

class TariffsController extends \Controller\BaseStalkerController {

    private $allPackageTypes = array(
            array("id" => "tv", "title" => "tv"), 
            array("id" => "video", "title" => "video"), 
            array("id" => "radio", "title" => "radio"), 
            array("id" => "module", "title" => "module"), 
            array("id" => "option", "title" => "option")
        );

    protected $allServiceTypes = array();

    public function __construct(Application $app) {
        parent::__construct($app, __CLASS__);
        $this->allServiceTypes = array(
            array("id" => 'periodic', "title" => $this->setLocalization("permanent")),
            array("id" => 'single', "title" => $this->setLocalization("once-only"))
        );

    }

    // ------------------- action method ---------------------------------------

    public function index() {
        
        if (empty($this->app['action_alias']) || $this->app['action_alias'] == 'index') {
            return $this->app->redirect($this->workURL . '/' . $this->app['controller_alias'] . '/tariff-plans');
        }
        
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    public function service_packages() {
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $attribute = $this->getServicePackagesDropdownAttribute();
        $this->checkDropdownAttribute($attribute);
        $this->app['dropdownAttribute'] = $attribute;
        
        $this->app['allPackageTypes'] = $this->setLocalization($this->allPackageTypes, 'title');
        $this->app['allServices'] = array(
            array("id" => '2', "title" => $this->setLocalization("complete")),
            array("id" =>  '1', "title" => $this->setLocalization("Optional"))
        );

        $this->getTariffsFilters();

        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    public function add_service_package() {
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $data = array_key_exists('form', $this->postData) ? $this->postData['form']: array();

        $form = $this->buildServicePackageForm($data);

        if ($this->saveServicePackageData($form)) {
            return $this->app->redirect($this->workURL . '/tariffs/service-packages');
        }
        $this->app['form'] = $form->createView();
        $this->app['servicePackageEdit'] = FALSE;

        $this->app['breadcrumbs']->addItem($this->setLocalization('Service packages'), $this->app['controller_alias'] . '/service-packages');
        $this->app['breadcrumbs']->addItem($this->setLocalization('Add package'));

        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    public function edit_service_package() {

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        if ($this->method == 'POST' && !empty($this->postData['form']['id'])) {
            $id = $this->postData['form']['id'];
        } else if ($this->method == 'GET' && !empty($this->data['id'])) {
            $id = $this->data['id'];
        } else {
            return $this->app->redirect('add-service-package');
        }

        $package = $this->db->getTariffsList(array('where' => array('services_package.id' => $id)));
        $package = (is_array($package) && count($package) > 0) ? $package[0] : array();

        $form = $this->buildServicePackageForm($package);

        if ($this->saveServicePackageData($form, TRUE)) {
            return $this->app->redirect($this->workURL . '/tariffs/service-packages');
        }

        $this->app['form'] = $form->createView();
        $this->app['servicePackageEdit'] = TRUE;
        $this->app['packageName'] = $package['name'];

        $this->app['breadcrumbs']->addItem($this->setLocalization('Service packages'), $this->app['controller_alias'] . '/service-packages');
        $this->app['breadcrumbs']->addItem($this->setLocalization('Edit package') . ': "' . $package['name'] . '"');
        return $this->app['twig']->render($this->getTemplateName('Tariffs::add_service_package'));
    }

    public function tariff_plans() {
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $attribute = $this->getTariffPlansDropdownAttribute();
        $this->checkDropdownAttribute($attribute);
        $this->app['dropdownAttribute'] = $attribute;

        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    public function add_tariff_plans() {
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $form = $this->buildTariffPlanForm();

        if ($this->saveTariffPlanData($form)) {
            return $this->app->redirect($this->workURL . '/tariffs/tariff-plans');
        }
        $this->app['userDefault'] = $this->getDefaultPlan();
        $this->app['form'] = $form->createView();
        $this->app['servicePlanEdit'] = FALSE;
        $this->app['breadcrumbs']->addItem($this->setLocalization('Tariff plans'), $this->app['controller_alias'] . '/tariff-plans');
        $this->app['breadcrumbs']->addItem($this->setLocalization('Add tariff plan'));
        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }
    
    public function edit_tariff_plan() {
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        if ($this->method == 'POST' && !empty($this->postData['form']['id'])) {
            $id = $this->postData['form']['id'];
        } else if ($this->method == 'GET' && !empty($this->data['id'])) {
            $id = $this->data['id'];
        } else {
            return $this->app->redirect('add-service-package');
        }
        $query_param = array(
            'select' => array("*"),
            'where' => array(),
            'like' => array(),
            'order' => array()
        );
        
        $query_param['where']['tariff_plan.id'] = $id;
        $query_param['order'] = 'tariff_plan.id';
        
        $plan = $this->db->getTariffPlansList($query_param);
        $plan = (is_array($plan) && count($plan) > 0) ? $plan[0] : array();
        $plan['days_to_expires'] = intval($plan['days_to_expires']) ? $plan['days_to_expires']: '';
        $plan['packages'] = $this->db->getOptionalForPlan(array(
            'select' => array('package_id as id', 'name', 'optional'),
            'where' => array('plan_id' => $id),
            'order' => array('package_in_plan.id' => '')
        ));

        $notifications = $this->db->getTariffsNotifications($id);

        if (!empty($notifications) && is_array($notifications)) {
            $plan['notification_delay_in_hours'] = $this->getFieldFromArray($notifications, 'notification_delay_in_hours');
            $plan['template_id'] = $this->getFieldFromArray($notifications, 'template_id');
        }

        $form = $this->buildTariffPlanForm($plan);

        if ($this->saveTariffPlanData($form, TRUE)) {
            return $this->app->redirect($this->workURL . '/tariffs/tariff-plans');
        }
        
        
        $this->app['userDefault'] = $this->getDefaultPlan($plan['id']);
        $this->app['form'] = $form->createView();
        $this->app['servicePlanEdit'] = TRUE;
        $this->app['planName'] = $plan['name'];
        $this->app['breadcrumbs']->addItem($this->setLocalization('Tariff plans'), $this->app['controller_alias'] . '/tariff-plans');
        $this->app['breadcrumbs']->addItem($this->setLocalization('Edit tariff plan') . ': "' . $plan['name'] . '"');
        return $this->app['twig']->render($this->getTemplateName('Tariffs::add_tariff_plans'));
    }

    public function subscribe_log() {
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $attribute = $this->getLogsDropdownAttribute();
        $this->checkDropdownAttribute($attribute);
        $this->app['dropdownAttribute'] = $attribute;

        $this->app['allInitiatorRoles'] = array(
            array("id" =>   'user',     "title" => $this->setLocalization("User")),
            array("id" =>   'admin',    "title" => $this->setLocalization("Administrator")),
            array("id" =>   'api',      "title" => $this->setLocalization("API"))
        );
        $this->app['allPackageStates'] = array(
            array("id" =>   '1',    "title" => $this->setLocalization("off")),
            array("id" =>   '2',    "title" => $this->setLocalization("on"))
        );
        $this->app['allPackageNames'] = $this->db->getTariffsList( array(
            'select'=>array('id', 'name as title'),
            'where' => array(),
            'like' => array(),
            'order' =>array('id'=>'ASC')
        ));

        if (!empty($this->data['user_id'])) {
            $currentUser = $this->db->getUser(array('id' => (int) $this->data['user_id']));
            $this->app['currentUser'] = array(
                'name' => $currentUser['fname'],
                'mac' => $currentUser['mac'],
                'uid' => $currentUser['id']
            );
            $this->app['breadcrumbs']->addItem($this->setLocalization('Log of user') . " " . " {$this->app['currentUser']['name']} ({$this->app['currentUser']['mac']})");
        }

        $this->getTariffsFilters();

        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    //----------------------- ajax method --------------------------------------

    public function service_packages_list_json() {

        if (!$this->isAjax) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $response = array(
            'data' => array(),
            'recordsTotal' => 0,
            'recordsFiltered' => 0
        );

        $filds_for_select = array(
            'id' => 'services_package.`id` as `id`',
            'external_id' => 'services_package.`external_id` as `external_id`',
            'name' => 'services_package.`name` as `name`',
            'users_count' => '0 as `users_count`',
            'type' => 'services_package.`type` as `type`',
            'all_services' => 'services_package.`all_services` as `all_services`'
        );

        $param = (!empty($this->data)?$this->data: $this->postData);

        $query_param = $this->prepareDataTableParams($param, array('operations', '_'));

        if (!isset($query_param['where'])) {
            $query_param['where'] = array();
        }

        if (empty($query_param['select'])) {
            $query_param['select'] = array_values($filds_for_select);
        } else {
            $query_param['select'][] = 'id';
        }
        $this->cleanQueryParams($query_param, array_keys($filds_for_select), $filds_for_select);

        $filter = $this->getTariffsFilters();

        $query_param['where'] = array_merge($query_param['where'], $filter);

        $response['recordsTotal'] = $this->db->getTotalRowsTariffsList();
        $response["recordsFiltered"] = $this->db->getTotalRowsTariffsList($query_param['where'], $query_param['like']);

        if (empty($query_param['limit']['limit'])) {
            $query_param['limit']['limit'] = 50;
        } elseif ($query_param['limit']['limit'] == -1) {
            $query_param['limit']['limit'] = FALSE;
        }
        $response['data'] = array_map(function($row){
            $row['RowOrder'] = "dTRow_" . $row['id'];
            return $row;
        }, $this->db->getTariffsList($query_param));
        $this->setUserCount($response['data']);

        $response["draw"] = !empty($this->data['draw']) ? $this->data['draw'] : 1;
        if ($this->isAjax) {
            $response = $this->generateAjaxResponse($response);
            return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
        } else {
            return $response;
        }
    }

    public function remove_service_package() {
        if (!$this->isAjax || $this->method != 'POST' || empty($this->postData['packageid'])) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $data = array();
        $data['action'] = 'deleteTableRow';
        $data['id'] = $this->postData['packageid'];
        $error = $this->setLocalization('Failed');
        $package_result = $this->db->deletePackageById($this->postData['packageid']);
        $services_result = $this->db->deleteServicesById($this->postData['packageid']);
        if (is_numeric($package_result) && is_numeric($services_result)) {
            $data['msg'] = $this->setLocalization("{pckg_rslt} packages and {srvcs_rslt} their services has been removed", '', array($package_result, $services_result), array('{pckg_rslt}' => $package_result, '{srvcs_rslt}' => $services_result));
            $error = '';
            if ($package_result === 0 && $services_result === 0) {
                $data['nothing_to_do'] = TRUE;
            }
        }

        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }

    public function get_services() {
        if (!$this->isAjax || $this->method != 'POST' || empty($this->postData['type'])) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $package = array();

        if (!empty($this->postData["package_id"])) {
            $param = array_intersect_key($this->postData, array_flip($this->getFieldFromArray($this->db->getTableFields('service_in_package'), 'Field')));
            $package = $this->db->getPackageById($param);
            if (!empty($package)) {
                $package = $this->getFieldFromArray($package, 'service_id');
            }
        }

        $data = array();
        $data['action'] = 'updateService';
        $data['type'] = $this->postData['type'];
        $func = 'get_' . $this->postData['type'] . '_services';
        ob_start();
        $data['services'] = $this->$func();
        if (!empty($data['services']) && is_array($data['services'])) {
            $data['services'] = array_values($data['services']);
            reset($data['services']);
            while(list($key, $row) = each($data['services'])){
                settype($data['services'][$key]['id'], 'string');
                $data['services'][$key]['selected'] = in_array($data['services'][$key]['id'], $package);
            }
        }
        ob_end_clean();

        $error = '';

        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }

    public function check_external_id() {
        if (!$this->isAjax || $this->method != 'POST' || !array_key_exists('externalid', $this->postData)) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        $data = array();
        $data['action'] = 'checkData';
        $data['input_id'] = 'form_external_id';

        if (strlen(trim((string) $this->postData['externalid'])) != 0) {
            $error = $this->setLocalization('ID already used');
            $param = array(
                'where' => array(
                    'external_id' => trim($this->postData['externalid'])
                ),
                'order' => array('id' => '')
            );
            if (!empty($this->postData['selfid'])) {
                $param['where']['id<>'] = trim($this->postData['selfid']);
            }

            $method = "getTariff" . (!empty($this->postData['plans']) ? 'Plan' : '') . 'sList';

            $result = $this->db->$method($param);

            if (!empty($result)) {
                $data['chk_rezult'] = $this->setLocalization('ID already used');
            } else {
                $data['chk_rezult'] = $this->setLocalization('ID is available');
                $error = '';
            }
        } else {
            $data['nothing_to_do'] = TRUE;
            $data['chk_rezult'] = '';
        }

        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }

    public function tariff_plans_list_json() {

        if (!$this->isAjax) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $response = array(
            'data' => array(),
            'recordsTotal' => 0,
            'recordsFiltered' => 0
        );

        $filds_for_select = array(
            'id' => 'tariff_plan.`id` as `id`',
            'external_id' => 'tariff_plan.`external_id` as `external_id`',
            'name' => 'tariff_plan.`name` as `name`',
            'users_count' => '(SELECT COUNT(*) FROM users WHERE (users.tariff_plan_id = tariff_plan.id) || IF(tariff_plan.user_default, tariff_plan_id = 0, 0)) AS users_count',
            'user_default' => 'tariff_plan.`user_default` as `user_default`'
        );

        $param = (!empty($this->data)?$this->data: $this->postData);

        $query_param = $this->prepareDataTableParams($param, array('operations', '_'));

        if (!isset($query_param['where'])) {
            $query_param['where'] = array();
        }

        if (empty($query_param['select'])) {
            $query_param['select'] = array_values($filds_for_select);
        } else {
            $query_param['select'][] = 'id';
            $query_param['select'][] = 'tariff_plan.`user_default` as `user_default`';
        }
        $this->cleanQueryParams($query_param, array_keys($filds_for_select), $filds_for_select);

        $filter = $this->getTariffsFilters();

        $query_param['where'] = array_merge($query_param['where'], $filter);

        $response['recordsTotal'] = $this->db->getTotalRowsTariffPlansList();
        $response["recordsFiltered"] = $this->db->getTotalRowsTariffPlansList($query_param['where'], $query_param['like']);

        if (empty($query_param['limit']['limit'])) {
            $query_param['limit']['limit'] = 50;
        } elseif ($query_param['limit']['limit'] == -1) {
            $query_param['limit']['limit'] = FALSE;
        }
        $response['data'] = array_map(function($row){
            $row['RowOrder'] = "dTRow_" . $row['id'];
            return $row;
        }, $this->db->getTariffPlansList($query_param));
//        $this->setUserCount($response['data']);

        $response["draw"] = !empty($this->data['draw']) ? $this->data['draw'] : 1;
        if ($this->isAjax) {
            $response = $this->generateAjaxResponse($response);
            return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
        } else {
            return $response;
        }
    }

    public function remove_tariff_plan() {
        if (!$this->isAjax || $this->method != 'POST' || empty($this->postData['planid'])) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $data = array();
        $data['action'] = 'deleteTableRow';
        $data['id'] = $this->postData['planid'];
        $error = $this->setLocalization('Failed');

        $tariff_result = $this->db->deleteTariffById($this->postData['planid']);
        $plans_result = $this->db->deletePlanById($this->postData['planid']);

        if (is_numeric($tariff_result) && is_numeric($plans_result)) {
            $data['msg'] = $this->setLocalization("{trff_rslt} tariff plans and {plns_rslt} their packages has been removed", '', array($tariff_result, $plans_result), array('{trff_rslt}' => $tariff_result, '{plns_rslt}' => $plans_result));
            $error = '';
            if ($tariff_result === 0 && $plans_result === 0) {
                $data['nothing_to_do'] = TRUE;
            }
        }

        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }

    public function subscribe_log_json() {

        if (!$this->isAjax) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $response = array(
            'data' => array(),
            'recordsTotal' => 0,
            'recordsFiltered' => 0
        );

        $filds_for_select = array(
            'id' => 'P_S_L.`id` as `id`',
            'mac' => 'CAST(U.`mac` AS CHAR) as `mac`',
            'package' => 'S_P.`name` as `package`',
            'state' => 'P_S_L.`set_state` as `state`',
            'initiator_name' => 'IF(P_S_L.`initiator` = "admin", A.login, IF(P_S_L.`initiator` = "user" AND U.`login` <> "" AND NOT ISNULL(U.`login`) , U.`login`, P_S_L.`initiator`)) as `initiator_name`',
            'initiator' => 'P_S_L.`initiator` as `initiator`',
            'modified' => 'CAST(P_S_L.`modified` as CHAR) as `modified`',
        );

        $param = (!empty($this->data)?$this->data: $this->postData);

        $query_param = $this->prepareDataTableParams($param, array('operations', '_'));

        if (!isset($query_param['where'])) {
            $query_param['where'] = array();
        }

        if (empty($query_param['select'])) {
            $query_param['select'] = array_values($filds_for_select);
        }
        $this->cleanQueryParams($query_param, array_keys($filds_for_select), $filds_for_select);

        $filter = $this->getTariffsFilters();

        $query_param['where'] = array_merge($query_param['where'], $filter);

        $user_id = FALSE;
        if (!empty($this->data['user_id'])) {
            $query_param['where']['user_id'] = $user_id =(int) $this->data['user_id'];
        }
        $query_param['select'][] = 'P_S_L.`user_id` as `user_id`';

        $response['recordsTotal'] = $this->db->getTotalRowsSubscribeLogList(array(), array(), $user_id);
        $response["recordsFiltered"] = $this->db->getTotalRowsSubscribeLogList($query_param['where'], $query_param['like']);

        if (empty($query_param['limit']['limit'])) {
            $query_param['limit']['limit'] = 50;
        } elseif ($query_param['limit']['limit'] == -1) {
            $query_param['limit']['limit'] = FALSE;
        }

        $self = $this;

        $response['data'] = array_map(function($row) use ($self){
            if ($row['initiator'] != 'admin' || $row['initiator_name'] == 'user') {
                $row['initiator_name'] = $self->setLocalization($row['initiator_name']);
            }
            $row['state'] = (int) $row['state'];
            $row['initiator'] = $self->setLocalization($row['initiator']);
            $row['modified'] = (int)  strtotime($row['modified']);
            $row['RowOrder'] = "dTRow_" . $row['id'];
            return $row;
        }, $this->db->getSubscribeLogList($query_param));

        $response["draw"] = !empty($this->data['draw']) ? $this->data['draw'] : 1;
        if ($this->isAjax) {
            $response = $this->generateAjaxResponse($response);
            return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
        } else {
            return $response;
        }
    }

    public function set_tvarchive_settings(){
        if (!$this->isAjax || $this->method != 'POST' || empty($this->postData['form']['channel_id'])) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $data = array();
        $data['id'] = $this->postData['form']['channel_id'];
        $error = $this->setLocalization('Failed');

        $curr_fields = $this->db->getTableFields('itv');
        $curr_fields = $this->getFieldFromArray($curr_fields, 'Field');
        $curr_fields = array_flip($curr_fields);

        $db_data = array_intersect_key($this->postData['form'], $curr_fields);
        array_walk($db_data, function($val){return is_string($val) ? trim($val): $val;});

        $result = $this->db->updateTVChannel($db_data, $this->postData['form']['channel_id']);

        if (is_numeric($result)) {
            $data['msg'] = $this->setLocalization("Done");
            $error = '';
            if ($result === 0) {
                $data['nothing_to_do'] = TRUE;
            }
            $archive_data = $this->postData['form'];
            $archive_data['id'] = $this->postData['form']['channel_id'];

            $storages_error = array();
            ob_start();

            try{
                $this->deleteChannelTasks($archive_data);
                $this->createTasks($archive_data);
                $this->setAllowedStoragesForChannel($archive_data);
            } catch (\Exception $e) {
                $storages_error[] = $e->getMessage();
            }

            $storages_error[] = ob_get_contents();
            ob_end_clean();

            if (!empty($storages_error)) {
                $error =  implode('. ', array_map(function($row){return strtok($row, "\n");}, $storages_error));
                $data['msg'] = $this->setLocalization('Found faulty storage') . '. ' . $this->setLocalization('Tv archive setting is not possible');
            }
        }

        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }
    
    //------------------------ service method ----------------------------------

    private function getTariffsFilters() {
        $return = array();
        if (!empty($this->data['filters'])) {
            if (!empty($this->data['filters']['type'])) {
                $return['type'] = $this->data['filters']['type'];
            }
            if (!empty($this->data['filters']['all_services'])) {
                $return['all_services'] = (int) $this->data['filters']['all_services'] - 1;
            }

            if (!empty($this->data['filters']['state'])) {
                $return['P_S_L.`set_state`'] = ((int) $this->data['filters']['state']) - 1;
            }

            if (!empty($this->data['filters']['initiator'])) {
                $return['P_S_L.`initiator`'] = $this->data['filters']['initiator'];
            }
            if (!empty($this->data['filters']['package'])) {
                $return['S_P.`id`'] = (int) $this->data['filters']['package'];
            }

            $this->app['filters'] = $this->data['filters'];
        } else {
            $this->app['filters'] = array();
        }
        return $return;
    }

    private function setUserCount(&$data) {
        reset($data);
        while (list($key, $row) = each($data)) {
            $data[$key]['users_count'] = (int) $this->db->getUserCountForPackage($row['id']);
            $data[$key]['users_count'] += (int) $this->db->getUserCountForSubscription($row['id']);
        }
    }

    private function buildServicePackageForm(&$data = array(), $edit = FALSE) {

        $default_additional_service_options = array(
            'tv' => array(
                'enable_tv_archive' =>array(
                    'label' => $this->setLocalization('TV archive'),
                    'values' => array(
                        array('opt_val' => '', 'opt_label' => $this->setLocalization('not specified')),
                        array('opt_val' => 1, 'opt_label' => $this->setLocalization('enabled')),
                        array('opt_val' => 0, 'opt_label' => $this->setLocalization('disabled'))
                    ),
                    'settings_link' => '<a id=setting_link_${id} target=blank href=' . $this->request->getBaseUrl()  . '/tv-channels/edit-channel?id=${id}>' . $this->setLocalization('Settings') . ' ${name}</a>',
                    'data_name' => 'service_status',
                    'data_val' => 'status'
                )
            )
        );

        $builder = $this->app['form.factory'];
        if (array_key_exists('all_services', $data)) {
            settype($data['all_services'], 'bool');
        } else {
            $data['all_services'] = FALSE;
        }
        $all_services = $services = $service_options = array();

        if (!empty($data["id"]) && ($package = $this->db->getPackageById($data["id"])) ) {
            $services = $this->getFieldFromArray($package, 'service_id');
            $service_options = array($data['type'] => array_combine($services, $this->getFieldFromArray($package, 'options')));
        }

        $data['service_options_json'] = json_encode($service_options);
        $data['services'] = $services;
        $data['services_json'] = json_encode($services);

        if (empty($data['service_type'])) {
            $data['service_type'] = 'periodic';
        }

        if (empty($data['type'])) {
            $data['type'] = 'tv';
        }

        $func = 'get_' . $data['type'] . "_services";
        $all_services = $this->$func();

        $choice_attr = array();

        if (array_key_exists($data['type'], $default_additional_service_options)) {
            $data_key_option = $default_additional_service_options[$data['type']];
            $choice_attr = function ($allChoices, $currentChoiceKey) use ($all_services, $data_key_option) {
                $return = array();
                foreach ($data_key_option as $option_row) {
                    $return["data-$option_row[data_name]"] = $all_services[$allChoices][$option_row['data_val']];
                }
                return $return;
            };
        }

        $all_services = array_combine($this->getFieldFromArray($all_services, 'id'), $this->getFieldFromArray($all_services, 'name'));

        $allPackageTypes = array_combine($this->getFieldFromArray($this->allPackageTypes, 'id'), $this->getFieldFromArray($this->allPackageTypes, 'title'));
        $allServiceTypes = array_combine($this->getFieldFromArray($this->allServiceTypes, 'id'), $this->getFieldFromArray($this->allServiceTypes, 'title'));

        $form = $builder->createBuilder('form', $data)
                ->add('id', 'hidden')
                ->add('external_id', 'text')
                ->add('name', 'text', array('constraints' => new Assert\NotBlank(), 'required' => TRUE))
                ->add('description', 'textarea', array('required' => FALSE))
                ->add('type', 'choice', array(
                    'choices' => $allPackageTypes,
                    'constraints' => array(new Assert\NotBlank()),
                    'required' => TRUE
                ))
                ->add('service_type', 'choice', array(
                    'choices' => $allServiceTypes,
                    'required' => FALSE,
                    'attr' => array('disabled' => (!empty($data['type']) && $data['type'] !== 'video') )
                ))
                ->add('price', 'text', array(
                    'required' => FALSE,
                    'attr' => array('disabled' => (!empty($data['type']) && $data['type'] !== 'video') || (!empty($data['service_type']) && $data['service_type'] !== 'single') )
                ))
                ->add('rent_duration', 'text', array(
                    'required' => FALSE,
                    'attr' => array('disabled' => (!empty($data['type']) && $data['type'] == 'video') || (!empty($data['service_type']) && $data['service_type'] !== 'single') )
                ))
                ->add('all_services', 'checkbox', array(
                    'required' => FALSE,
                    'attr' => array('disabled' => (empty($data['type']) || $data['type'] == 'module') )
                ))
                ->add('services', 'choice', array(
                    'choices' => $all_services,
                    'multiple' => TRUE,
                    'required' => FALSE,
                    'attr' => array('disabled' => $data['all_services'] ),
                    'choice_attr' => $choice_attr
                ))
                ->add('services_json', 'hidden')
                ->add('service_options_json', 'hidden')
                ->add('save', 'submit');

        $this->app['default_additional_service_options'] = json_encode($default_additional_service_options);
        $this->app['dvr_storages'] = $this->getStorages();

        $tv_archive_type =  $this->db->getEnumValues('itv', 'tv_archive_type');
        $tv_archive_type = array_filter(array_combine(array_values($tv_archive_type), array_map('ucfirst', str_replace('_dvr', ' DVR', $tv_archive_type))));
        $this->app['tv_archive_type'] = $tv_archive_type;

        return $form->getForm();
    }

    private function saveServicePackageData(&$form, $edit = FALSE) {
        if (!empty($this->method) && $this->method == 'POST') {

            $form->handleRequest($this->request);
            $data = $form->getData();
            $action = ($edit ? 'updatePackage' : 'insertPackage');
            $package_external_id = $this->db->getTariffsList(array('where' => array('external_id' => $data['external_id'], "id<>"=>($edit? $data['id']: ''))));
            $data['all_services'] = !empty($data['all_services']) ? (int) $data['all_services'] : 0;

            if (empty($data['service_type'])) {
                $data['service_type'] = 'periodic';
            }

            if ($edit && (!empty($package_external_id) && $package_external_id[0]['id'] != $data['id']) ||
                !$edit && !empty($package_external_id)) {
                $form->get('external_id')->addError(new FormError($this->setLocalization('ID already used')));
                return FALSE;
            }

            if ($form->isValid()) {

                if ( ($parsed_json = json_decode($data['services_json'], TRUE)) && $parsed_json && json_last_error() == JSON_ERROR_NONE) {
                    $data['services'] = $parsed_json;
                } else {
                    $data['services'] = array();
                }

                $param[] = array_intersect_key($data, array_flip($this->getFieldFromArray($this->db->getTableFields('services_package'), 'Field')));
                if ($edit && !empty($data['id'])) {
                    $param[] = $data['id'];
                    unset($param[0]['id']);
                    if ($package_external_id == $data['external_id']) {
                        unset($param[0]['external_id']);
                    }
                    $this->db->deleteServicesById($data['id']);
                }
                if ($return_val = call_user_func_array(array($this->db, $action), $param)) {
                    if (!empty($data['services'])) {
                        $service_options = json_decode($data['service_options_json'], TRUE);
                        foreach ($data['services'] as $service) {
                            $this->db->insertServices(array(
                                'service_id' => $service,
                                'package_id' => ($action == 'updatePackage' ? $data['id'] : $return_val),
                                'type' => $data['type'],
                                'options' => array_key_exists($data['type'], $service_options) && array_key_exists($service, $service_options[$data['type']]) ? $service_options[$data['type']][$service]: '{}'
                            ));
                        }
                    }
                    return TRUE;
                }
            }
        }
        return FALSE;
    }

    private function get_tv_services() {
        $services = Itv::getServices();
        $services = array_combine($this->getFieldFromArray($services, 'id'), $services);

        $params = array(
            'select' => array('id', 'IF(`tv_archive_type` <> "" AND `mc_cmd` <> "", 1, 0) as `status`'),
            'in' => array('id', array_keys($services), FALSE),
        );
        $tv_archive_statuses = $this->db->getArchiveStatus($params);
        $tv_archive_statuses = array_combine($this->getFieldFromArray($tv_archive_statuses, 'id'), $tv_archive_statuses);

        return array_map(function($row) use ($tv_archive_statuses){
            $row['status'] = (int) (array_key_exists($row['id'], $tv_archive_statuses) ? $tv_archive_statuses[$row['id']]['status']: 0);
            return $row;
        }, $services);
    }

    private function get_video_services() {
        return \Video::getServices();
    }

    private function get_radio_services() {
        return \Radio::getServices();
    }

    private function get_module_services() {
        return \Module::getServices();
    }

    private function get_option_services() {
        $option_services = Config::getSafe('option_services', array());

        $result = array_map(function($item) {
            return array(
                'id' => $item,
                'name' => $item
            );
        }, $option_services);
        return $result;
    }

    private function buildTariffPlanForm(&$data = array(), $edit = FALSE){
        $builder = $this->app['form.factory'];
        if (array_key_exists('user_default', $data)) {
            $val = $data['user_default'];
            settype($data['user_default'], 'bool');
        } else {
            $val = FALSE;
        }
        $tmp = $this->db->getTariffsList(array('select' => array('id', 'name'), 'order' => array('id' => '')));
        $all_packeges = array_combine($this->getFieldFromArray($tmp, 'id'), $this->getFieldFromArray($tmp, 'name'));
        
        if (!empty($data['packages'])) {
            $data['packages_optional'] = array_combine($this->getFieldFromArray($data['packages'], 'id'), $this->getFieldFromArray($data['packages'], 'optional'));
            $data['packages'] = $this->getFieldFromArray($data['packages'], 'id');
        } else {
            $data['packages'] = $data['packages_optional'] = array();
        }
        
        $data['packages_optional'] = json_encode($data['packages_optional']);

        if (empty($data['notification_delay_in_hours'])) {
            $data['notification_delay_in_hours'] = array('');
        }
        if (empty($data['template_id'])) {
            $data['template_id'] = array('');
        }

        $form = $builder->createBuilder('form', $data)
                ->add('id', 'hidden')
                ->add('external_id', 'text')
                ->add('name', 'text', array('constraints' => array(new Assert\NotBlank()), 'required' => TRUE))
                ->add('user_default', 'checkbox', array('required' => TRUE, 'value' => $val))
                ->add('packages', 'choice', array(
                    'choices' => $all_packeges,
                    'multiple' => TRUE,
                    'required' => FALSE))
                ->add('packages_optional', 'hidden', array('required' => FALSE))
                ->add('days_to_expires', 'text')
                ->add('save', 'submit');

        $notification_delay_label = array(
            '' => '',
            3 => "3 " . $this->setLocalization('hours'),
            24 => "24 " . $this->setLocalization('hours'),
            72 => "3 " . $this->setLocalization('days'),
            168 => "7 " . $this->setLocalization('days'),
            336 => "14 " . $this->setLocalization('days'),
            720 => "30 " . $this->setLocalization('days')
        );

        $tmp = $this->db->getAllFromTable('messages_templates', 'created');
        $templates = array_combine($this->getFieldFromArray($tmp, 'id'), $this->getFieldFromArray($tmp, 'title'));

        $templates = array('' => '') + $templates;

        $this->app['notification_delay_labels'] = $notification_delay_label;
        $this->app['notification_templates'] = $templates;

        $form->add('notification_delay_in_hours', 'collection', array(
            'type' => 'choice',
            'options' => array(
                'required' => TRUE,
                'choices'  => $notification_delay_label,
                'expanded' => FALSE,
                'multiple' => FALSE
            ),
            'required' => TRUE,
            'allow_add' => TRUE,
            'allow_delete' => TRUE,
            'prototype' => TRUE
        ))->add('template_id', 'collection', array(
            'type' => 'choice',
            'options' => array(
                'required' => TRUE,
                'choices'  => $templates,
                'expanded' => FALSE,
                'multiple' => FALSE
            ),
            'required' => TRUE,
            'allow_add' => TRUE,
            'allow_delete' => TRUE,
            'prototype' => TRUE
        ));

        return $form->getForm();
    }
    
    private function saveTariffPlanData(&$form, $edit = FALSE) {
        if (!empty($this->method) && $this->method == 'POST') {
            $form->handleRequest($this->request);
            $data = $form->getData();
            $action = ($edit ? 'updatePlan' : 'insertPlan');

            $data['external_id'] = trim($data['external_id']);
            if (!empty($data['external_id'])) {
                $param = array(
                    'where' => array(
                        'external_id' => $data['external_id'],
                    )
                );
                if (!empty($data['id'])) {
                    $param['where']['id<>'] = trim($data['id']);
                }

                $plan = $this->db->getTariffPlansList($param);

                if (!empty($plan)) {
                    $form->get('external_id')->addError(new FormError($this->setLocalization('ID already used')));
                    return FALSE;
                }
            }

            if ($form->isValid()) {
                $param = array();
                $param[] = array_intersect_key($data, array_flip($this->getFieldFromArray($this->db->getTableFields('tariff_plan'), 'Field')));
                if ($edit && !empty($data['id'])) {
                    $param[] = $data['id'];    
                    unset($param[0]['id']);

                }

                $return_val = call_user_func_array(array($this->db, $action), $param);

                if (is_numeric($return_val)) {

                    $this->db->deletePackageInPlanById($data['id']);

                    if (!empty($data['packages_optional'])) {
                        $packages_optional = json_decode($data['packages_optional']);
                        foreach ($packages_optional as $package => $option) {
                            $this->db->insertPackageInPlan(array(
                                'plan_id' => ($action == 'updatePlan' ? $data['id'] : $return_val),
                                'package_id' => $package,
                                'optional' => $option
                            ));
                        }
                    }

                    $this->db->deleteTariffsNotifications($data['id']);

                    if (!empty($data['notification_delay_in_hours']) && is_array($data['notification_delay_in_hours'])) {
                        $params = array(
                            'tariff_id' => ($action == 'updatePlan' ? $data['id'] : $return_val)
                        );
                        foreach ($data['notification_delay_in_hours'] as $delay_key => $delay_val) {
                            if (!empty($delay_val)) {
                                $params['notification_delay_in_hours'] = $delay_val;
                                if (array_key_exists($delay_key, $data['template_id'])) {
                                    $params['template_id'] = $data['template_id'][$delay_key];
                                }
                                $this->db->insertTariffsNotifications($params);
                            }
                        }
                    }

                    return TRUE;
                }
            }
        }
        return FALSE;
    }
    
    private function getDefaultPlan($curr_id = FALSE){
        $default_plan = $this->db->getUserDefaultPlan();
        if (!empty($default_plan) && $default_plan != $curr_id) {
            return TRUE;
        }
        return FALSE;
    }
    
    private function getServicePackagesDropdownAttribute() {
        return array(
            array('name'=>'external_id',    'title'=>$this->setLocalization('External ID'), 'checked' => TRUE),
            array('name'=>'name',           'title'=>$this->setLocalization('Package'),     'checked' => TRUE),
            array('name'=>'users_count',    'title'=>$this->setLocalization('Users'),       'checked' => TRUE),
            array('name'=>'type',           'title'=>$this->setLocalization('Service'),     'checked' => TRUE),
            array('name'=>'all_services',   'title'=>$this->setLocalization('Access'),      'checked' => TRUE),
            array('name'=>'operations',     'title'=>$this->setLocalization('Operations'),  'checked' => TRUE)
        );
    }
    
    private function getTariffPlansDropdownAttribute() {
        return array(
            array('name'=>'external_id',    'title'=>$this->setLocalization('External ID'), 'checked' => TRUE),
            array('name'=>'name',           'title'=>$this->setLocalization('Tariff name'), 'checked' => TRUE),
            array('name'=>'users_count',    'title'=>$this->setLocalization('Users'),       'checked' => TRUE),
            array('name'=>'operations',     'title'=>$this->setLocalization('Operations'),  'checked' => TRUE)
        );
    }

    private function getLogsDropdownAttribute() {
        return array(
            array('name'=>'id',             'title'=>$this->setLocalization('ID'),              'checked' => TRUE),
            array('name'=>'mac',            'title'=>$this->setLocalization('User'),            'checked' => TRUE),
            array('name'=>'package',        'title'=>$this->setLocalization('Package name'),    'checked' => TRUE),
            array('name'=>'state',          'title'=>$this->setLocalization('State'),           'checked' => TRUE),
            array('name'=>'initiator_name', 'title'=>$this->setLocalization('Initiator'),       'checked' => TRUE),
            array('name'=>'initiator',      'title'=>$this->setLocalization('Initiator role'),  'checked' => TRUE),
            array('name'=>'modified',       'title'=>$this->setLocalization('Modified'),        'checked' => TRUE)
        );
    }

    private function getStorages(){

        $storages = $this->db->getStorages();

        $return = array_fill_keys(array('storage_names', 'flussonic_storage_names', 'wowza_storage_names', 'nimble_storage_names'), array());

        if (!empty($storages)) {

            $storage_names = $this->getFieldFromArray($storages, 'storage_name');
            $dvr_types = array_combine($storage_names, $this->getFieldFromArray($storages, 'dvr_type'));

            $st_tmp = array();
            $return["storage_names"] = array_combine($storage_names, $storage_names);

            foreach (array('flussonic', 'wowza', 'nimble') as $storage_type){
                $st_tmp = array_combine($storage_names, $this->getFieldFromArray($storages, $storage_type . '_dvr'));
                array_walk($st_tmp, function(&$item, $key) use ($dvr_types, $storage_type){
                    if ($item || str_replace(array('_', 'dvr'), '', $dvr_types[$key]) == $storage_type) {
                        $item = $key;
                        return $key;
                    } else {
                        $item = FALSE;
                    }
                    return $item;
                });
                $return["{$storage_type}_storage_names"] = array_filter($st_tmp);
                $return["storage_names"] = array_diff($return["storage_names"], $return["{$storage_type}_storage_names"]);
            }
        }

        return $return;
    }

    private function deleteChannelTasks($data) {
        if ($data['tv_archive_type']) {
            $archive_class = '\\' . ucfirst(trim(str_replace(array('_dvr', 'stalker'), '', $data['tv_archive_type']))) . 'TvArchive';
            if (class_exists($archive_class)) {
                $archive = new $archive_class();
                $archive->deleteTasks($data['id']);
            }
        }
    }

    private function createTasks($data) {

        if (!empty($data['tv_archive_type'])){

            $storage_names = array();
            $archive_name = trim(str_replace(array('_dvr', 'stalker'), '', $data['tv_archive_type']));
            $archive_class = '\\' . ucfirst($archive_name) . 'TvArchive';
            if (class_exists($archive_class)) {
                $archive = new $archive_class();
                $archive_storage = trim($archive_name . '_storage_names', '_');
                if (!empty($data[$archive_storage])) {
                    $storage_names = $data[$archive_storage];
                }
                $archive->createTasks($data['id'], $storage_names);
            }
        }
    }

    private function setAllowedStoragesForChannel($data) {
        if ($data['allow_pvr']) {
            \RemotePvr::setAllowedStoragesForChannel($data['id'], $data['pvr_storage_names']);
        }
    }
}

class Itv extends \Itv {
    public static function getServices() {
        return \Stalker\Lib\Core\Mysql::getInstance()->select('id, CONCAT_WS(". ", cast(number as char), name) as name, number')->from('itv')->orderby('number')->get()->all();
    }
}
