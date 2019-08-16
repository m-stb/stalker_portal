<?php

namespace Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormFactoryInterface as FormFactoryInterface;

class BroadcastServersController extends \Controller\BaseStalkerController {

    public function __construct(Application $app) {
        parent::__construct($app, __CLASS__);
    }

    // ------------------- action method ---------------------------------------

    public function index() {
        
        if (empty($this->app['action_alias'])) {
            return $this->app->redirect($this->app['controller_alias'] . '/broadcast-servers-list');
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    public function broadcast_servers_list() {
        
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $attribute = $this->getServersDropdownAttribute();
        $this->checkDropdownAttribute($attribute);
        $this->app['dropdownAttribute'] = $attribute;

        $this->app['allServerStatus'] = array(
            array('id' => 1, 'title' => $this->setLocalization('off')),
            array('id' => 2, 'title' => $this->setLocalization('on'))
        );
        
        $allZone = $this->db->getAllFromTable('stream_zones');
        $allZoneID = $this->getFieldFromArray($allZone, 'id');
        $allZoneNames = $this->getFieldFromArray($allZone, 'name');
        if (!empty($allZoneID) && !empty($allZoneNames) && count($allZoneNames) == count($allZoneID)) {
            $this->app['allZones'] = array_combine($allZoneID, $allZoneNames);
        }

        $default_zone = $this->db->getZoneList(array('select'=>array('S_Z.*'), 'where'=>array('S_Z.default_zone' => 1)));
        $this->app['default_zone'] = (!empty($default_zone) ? $default_zone[0]: FALSE);
        $like_filter = array();
        $this->getStatisticsFilters($like_filter);

        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    public function broadcast_zone_list() {
        
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $attribute = $this->getZoneDropdownAttribute();
        $this->checkDropdownAttribute($attribute);
        $this->app['dropdownAttribute'] = $attribute;

        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }
    
    public function add_zone() {
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $form = $this->buildZoneForm();

        if ($this->saveZoneData($form)) {
            return $this->app->redirect($this->workURL . '/' . $this->app['controller_alias'] . '/broadcast-zone-list');
        }
        $this->app['form'] = $form->createView();
        $this->app['zoneEdit'] = FALSE;
        $this->app['breadcrumbs']->addItem($this->setLocalization('Streaming area'), "{$this->workURL}/{$this->app['controller_alias']}/broadcast-zone-list");
        $this->app['breadcrumbs']->addItem($this->setLocalization('Add area'));
        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }
    
    public function edit_zone() {
        ob_start();
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        if ($this->method == 'POST' && !empty($this->postData['form']['id'])) {
            $id = $this->postData['form']['id'];
        } else if ($this->method == 'GET' && !empty($this->data['id'])) {
            $id = $this->data['id'];
        } else {
            return $this->app->redirect('add-zone');
        }
        $zone = $this->db->getZoneList(array('select'=>array('S_Z.*'), 'where'=>array('S_Z.id' => $id)));
        $this->zone = (is_array($zone) && count($zone) > 0) ? $zone[0] : array();

        $form = $this->buildZoneForm($this->zone, TRUE);

        if ($this->saveZoneData($form, TRUE)) {
            return $this->app->redirect($this->workURL . '/' . $this->app['controller_alias'] . '/broadcast-zone-list');
        }

        $this->app['form'] = $form->createView();
        $this->app['zoneEdit'] = TRUE;
        $this->app['zoneName'] = $this->zone['name'];
        ob_end_clean();
        
        $this->app['breadcrumbs']->addItem($this->setLocalization('Streaming area'), "{$this->workURL}/{$this->app["controller_alias"]}/broadcast-zone-list");
        $this->app['breadcrumbs']->addItem($this->setLocalization('Edit area') . ': "' . $this->zone['name'] . '"');
        
        return $this->app['twig']->render($this->getTemplateName('BroadcastServers::add_zone'));
    }

    //----------------------- ajax method --------------------------------------
    
    public function broadcast_servers_list_json($local_uses = FALSE) {

        if (!$this->isAjax && $local_uses === FALSE) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        
        $response = array(
            'data' => array(),
            'recordsTotal' => 0,
            'recordsFiltered' => 0,
            'action' => 'setServerModal'
        );
               
        $filds_for_select = $this->getServersFields();
                
        $error = $this->setLocalization("Error");
        $param = (!empty($this->data)?$this->data: $this->postData);

        $like_filter = array();
        $filter = $this->getStatisticsFilters($like_filter);
        
        $query_param = $this->prepareDataTableParams($param, array('operations', 'RowOrder', '_'));

        if (!isset($query_param['where'])) {
            $query_param['where'] = array();
        }
        
        if (empty($query_param['like']) && !empty($like_filter)) {
            $query_param['like'] = $like_filter;
        } elseif (!empty($query_param['like']) && !empty($like_filter)) {
            $query_param['like'] = array_merge($query_param['like'], $like_filter);
        }
        
        $query_param['where'] = array_merge($query_param['where'], $filter);
        
        if (empty($query_param['select'])) {
            $query_param['select'] = array_values($filds_for_select);
        } 
        $this->cleanQueryParams($query_param, array_keys($filds_for_select), $filds_for_select);

        if (!empty($param['id'])) {
            $query_param['where']['S_S.`id`'] = $param['id'];
        }

        $response['recordsTotal'] = $this->db->getServersTotalRows();
        $response["recordsFiltered"] = $this->db->getServersTotalRows($query_param['where'], $query_param['like']);

        if (empty($query_param['limit']['limit'])) {
            $query_param['limit']['limit'] = 50;
        } elseif ($query_param['limit']['limit'] == -1) {
            $query_param['limit']['limit'] = FALSE;
        }
        
        $query_param['select'][] = 'stream_zone';
        
        $response["data"] =  array_map(function($row){
            $row['RowOrder'] = "dTRow_" . $row['id'];
            return $row;
        }, $this->db->getServersList($query_param));
        $response["draw"] = !empty($this->data['draw']) ? $this->data['draw'] : 1;
        
        $error = "";
        if ($this->isAjax && !$local_uses) {
            $response = $this->generateAjaxResponse($response);
            return new Response(json_encode($response), (empty($error) ? 200 : 500));
        } else {
            return $response;
        }
    }
    
    public function broadcast_zone_list_json() {

        if (!$this->isAjax) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        
        $response = array(
            'data' => array(),
            'recordsTotal' => 0,
            'recordsFiltered' => 0,
            'action' => ''
        );

               
        $filds_for_select = $this->getZoneFields();
                
        $error = "Error";
        $param = (empty($param) ? (!empty($this->data)?$this->data: $this->postData) : $param);

        $query_param = $this->prepareDataTableParams($param, array('operations', 'RowOrder', '_'));

        if (!isset($query_param['where'])) {
            $query_param['where'] = array();
        }
        
        if (empty($query_param['select'])) {
            $query_param['select'] = array_values($filds_for_select);
        }
        $this->cleanQueryParams($query_param, array_keys($filds_for_select), $filds_for_select);

        $response['recordsTotal'] = $this->db->getZoneTotalRows();
        $response["recordsFiltered"] = $this->db->getZoneTotalRows($query_param['where'], $query_param['like']);

        if (empty($query_param['limit']['limit'])) {
            $query_param['limit']['limit'] = 50;
        } elseif ($query_param['limit']['limit'] == -1) {
            $query_param['limit']['limit'] = FALSE;
        }
        
        $response["data"] = array_map(function($row){
            $row['RowOrder'] = "dTRow_" . $row['id'];
            return $row;
        }, $this->db->getZoneList($query_param));
        $response["draw"] = !empty($this->data['draw']) ? $this->data['draw'] : 1;
        
        $error = "";
        if ($this->isAjax) {
            $response = $this->generateAjaxResponse($response);
            return new Response(json_encode($response), (empty($error) ? 200 : 500));
        } else {
            return $response;
        }
    }
    
    public function remove_zone() {
        if (!$this->isAjax || $this->method != 'POST' || empty($this->postData['id'])) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $data = array();
        $data['action'] = 'deleteTableRow';
        $data['id'] = $this->postData['id'];

        $error = $this->setLocalization('Failed');

        $result_zone = $this->db->deleteZone($this->postData['id']);
        $result_countries = $this->db->deleteCountriesInZone($this->postData['id']);
        $result_ips= $this->db->deleteIpsInZone($this->postData['id']);
        if (is_numeric($result_zone) && is_numeric($result_countries) && is_numeric($result_ips)) {
            $error = '';
            if (($result_zone + $result_countries + $result_ips) === 0) {
                $data['nothing_to_do'] = TRUE;
            }
            $data['msg'] = $this->setLocalization("Deleted {rslt_zn} zone for {rslt_cntrs} countries and {rslt_ips} ip", '', TRUE, array('{rslt_zn}' => $result_zone, '{rslt_cntrs}' => $result_countries, '{rslt_ips}' => $result_ips));
        }

        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500));
    }
    
    public function remove_server() {
        if (!$this->isAjax || $this->method != 'POST' || empty($this->postData['id'])) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $data = array();
        $data['action'] = 'deleteTableRow';
        $data['id'] = $this->postData['id'];
        $error = $this->setLocalization('Failed');

        $result = $this->db->deleteServers($this->postData['id']);
        if (is_numeric($result)) {
            $error = '';
            if ($result === 0) {
                $data['nothing_to_do'] = TRUE;
            }
            $data['msg'] = $this->setLocalization('Deleted') . ': ' . $result;
        }

        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500));
    }
    
    public function toggle_server_status() {
        
        if (!$this->isAjax || $this->method != 'POST' || empty($this->postData['id']) || !array_key_exists('status', $this->postData)) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $data = array();
        $data['action'] = 'updateTableData';
        $data['id'] = $this->postData['id'];
        $error = $this->setLocalization('Failed');

        $result = $this->db->updateServers(array('status' => (int)(!((bool) $this->postData['status']))), $this->postData['id']);
        if (is_numeric($result)) {
            $error = '';
            if ($result === 0) {
                $data['nothing_to_do'] = TRUE;
            }
            $data = array_merge_recursive($data, $this->broadcast_servers_list_json(TRUE));
            $data['action'] = 'updateTableRow';
            $data['msg'] = $this->setLocalization('Changed');
        }

        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500));
    }
    
    public function save_server() {
        
        if (!$this->isAjax || $this->method != 'POST' || empty($this->postData)) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        
        $data = array();
        $data['action'] = 'updateTableData';
        $item = array($this->postData);
        $error = $this->setLocalization('error');
        if (empty($this->postData['id'])) {
            $operation = 'insertServers';
        } else {
            $operation = 'updateServers';
            $item['id'] = $this->postData['id'];
        }
        unset($item[0]['id']);

        if (preg_match('/^[a-z0-9\.\-]+(\:\d+)?$/i', $this->postData['address']) && is_numeric($this->postData['max_sessions'])) {
            $result = call_user_func_array(array($this->db, $operation), $item);
            if (is_numeric($result)) {
                $error = '';
                if ($result === 0) {
                    $data['nothing_to_do'] = TRUE;
                }
                if ($operation == 'updateServers') {
                    $data = array_merge_recursive($data, $this->broadcast_servers_list_json(TRUE));
                    $data['action'] = 'updateTableRow';
                    $data['id'] = $this->postData['id'];
                    $data['msg'] = $this->setLocalization('Changed');
                } else {
                    $data['msg'] = $this->setLocalization('Saved');
                }
            }
        } else {
            $data['msg'] = $error = $this->setLocalization("Invalid data");
        }

        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500));
    }
    
    //------------------------ service method ----------------------------------
    
    private function getStatisticsFilters(&$like_filter) {
        $return = array();

        if (!empty($this->data['filters'])) {
            
            if (array_key_exists('status', $this->data['filters']) && !empty($this->data['filters']['status'])) {
                $return['S_S.`status`'] = $this->data['filters']['status'] - 1;
            }

            $this->app['filters'] = $this->data['filters'];
        } else {
            $this->app['filters'] = array();
        }
        return $return;
    }
    
    private function getZoneDropdownAttribute() {
        return array(
            array('name' => 'id',           'title' => $this->setLocalization('ID'),                    'checked' => TRUE),
            array('name' => 'name',         'title' => $this->setLocalization('Title'),                 'checked' => TRUE),
            array('name' => 'country_count','title' => $this->setLocalization('Quantity of countries'), 'checked' => TRUE),
            array('name' => 'ip_count',     'title' => $this->setLocalization('Quantity of IPs or ranges'),'checked' => TRUE),
            array('name' => 'default_flag', 'title' => $this->setLocalization('Default'),               'checked' => TRUE),
            array('name' => 'operations',   'title' => $this->setLocalization('Operation'),             'checked' => TRUE)
        );
    }
    
    private function getZoneFields(){
        return array(
            "id" => "S_Z.`id` as `id`",
            "name" => "S_Z.`name` as `name`",
            "country_count" => "COUNT(C_I_Z.`zone_id`) as `country_count`",
            "ip_count" => "COUNT(I_I_Z.`zone_id`) as `ip_count`",
            "default_flag" => "S_Z.`default_zone` as `default_flag`"
        );
    }
    
    private function getServersDropdownAttribute() {
        return array(
            array('name' => 'id',               'title' => $this->setLocalization('ID'),            'checked' => TRUE),
            array('name' => 'name',             'title' => $this->setLocalization('Title'),         'checked' => TRUE),
            array('name' => 'address',          'title' => $this->setLocalization('URL'),           'checked' => TRUE),
            array('name' => 'max_sessions',     'title' => $this->setLocalization('Maximum users'), 'checked' => TRUE),
            array('name' => 'stream_zone_name', 'title' => $this->setLocalization('Streaming area'),'checked' => TRUE),
            array('name' => 'status',           'title' => $this->setLocalization('Status'),        'checked' => TRUE),
            array('name' => 'operations',       'title' => $this->setLocalization('Operations'),    'checked' => TRUE)
        );
    }
    
    private function getServersFields(){
        return array(
            'id' => 'S_S.`id` as `id`',
            'name' => 'S_S.`name` as `name`',
            'address' => 'S_S.`address` as `address`',
            'max_sessions' => 'S_S.`max_sessions` as `max_sessions`',
            'stream_zone_name' => 'S_Z.`name` as `stream_zone_name`',
            'status' => 'S_S.`status` as `status`'
        );
    }
    
    private function buildZoneForm(&$data = array(), $edit = FALSE) {

        $builder = $this->app['form.factory'];
        
        if (array_key_exists('default_zone', $data)) {
            $val = $data['default_zone'];
            settype($data['default_zone'], 'bool');
        } else {
            $val = (int)( !array_sum($this->getFieldFromArray($this->db->getAllFromTable('stream_zones'), 'default_zone')));
        }
        
        $default_array = array(
            'required' => false, 
            'value' => $val
        );
        $default = $this->db->getZoneList(array('select'=>array('S_Z.`id` as `id`'), 'where'=>array('default_zone' => 1)));
        if (!empty($default) && (empty($data['id']) || $data['id'] != $default[0]['id'])){
            $default_array['disabled'] = 'disabled';
        } 
        
        $all_countries = $countries = $disabled_countries = array('');
        if (!empty($data["id"])) {
            $countries = array_flip($this->db->getContryByZoneId($data["id"]));
            $ips = $this->db->getIpsByZoneId($data["id"]);
            $data['ips'] = (!empty($ips) && is_array($ips)) ? implode(',', $ips): '';
        }
        $all_countries = $this->db->getAllFromTable('countries');
        $all_countries = array_combine($this->getFieldFromArray($all_countries, 'id'), $this->getFieldFromArray($all_countries, 'name' . ($this->app['language'] != 'ru' ? "_en": "")));
        $countries = array_intersect_key($all_countries, $countries);
        $disabled_countries = array_diff_key($all_countries, $countries);

        if (empty($countries)) {
            $countries[] = '';
        }
        $disabled_countries["0"] = '';
        $countries["0"] = '';

        $form = $builder->createBuilder('form', $data)
                ->add('id', 'hidden')
                ->add('name', 'text', array(
                    'constraints' => new Assert\NotBlank(),
                    'required' => TRUE
                ))
                ->add('default_zone', 'checkbox', $default_array)
                ->add('type', 'choice', array(
                    'choices' => array(
                        'country' => $this->setLocalization('Country'),
                        'ip' => $this->setLocalization('IP')
                    ),
                    'multiple' => FALSE,
                    'required' => TRUE,
                    'empty_data' => array('country')
                ))
                ->add('disabled_countries_json', 'hidden')
                ->add('disabled_countries', 'choice', array(
                    'choices' => $disabled_countries,
                    'multiple' => TRUE,
                    'required' => FALSE
                ))
                ->add('countries_json', 'hidden')
                ->add('countries', 'choice', array(
                    'choices' => $countries,
                    'multiple' => TRUE,
                    'required' => FALSE
                ))
                ->add('ips', 'text')
                ->add('save', 'submit');
//                ->add('reset', 'reset');
        return $form->getForm();
    }
    
    private function saveZoneData(&$form, $edit = FALSE) {
        if (!empty($this->method) && $this->method == 'POST') {

            $form->handleRequest($this->request);
            $data = $form->getData();
            $data['countries'] = array_flip(json_decode($data['countries_json']));
            $data['disabled_countries'] = array_flip(json_decode($data['disabled_countries_json']));
            $action = (isset($this->zone) && $edit ? 'updateZone' : 'insertZone');

            if ($form->isValid()) {
                $param[] = array_intersect_key($data, array_flip($this->getFieldFromArray($this->db->getTableFields('stream_zones'), 'Field')));
                if ($edit && !empty($data['id'])) {
                    $param[] = $data['id'];
                    unset($param[0]['id']);
                    $this->db->deleteCountriesInZone($data['id']);
                    $this->db->deleteIpsInZone($data['id']);
                }
                if ($return_val = call_user_func_array(array($this->db, $action), $param)) {
                    $params = array();
                    if ($data['type'] == 'country') {
                        $params = array_keys($data['countries']);
                    } elseif ($data['type'] == 'ip' && !empty($data['ips'])) {
                        $params = array_map('trim', explode(',', (string)$data['ips']));
                    }
                    if (!empty($params)) {
                        $param_field = $data['type'] == 'country' ? 'country_id' : 'ip';
                        $insert_data = array('zone_id' => ($action == 'updateZone' ? $data['id'] : $return_val));
                        $insert_func = $data['type'] == 'country' ? 'insertCountriesInZone' : 'insertIpsInZone';
                        foreach ($params as $param) {
                            $insert_data[$param_field] = $param;
                            $this->db->{$insert_func}($insert_data);
                        }
                    }
                    return TRUE;
                }
            }
        }
        return FALSE;
    }
}
