<?php

namespace Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as Response;

class LicenseKeysController extends \Controller\BaseStalkerController {

    public function __construct(Application $app) {
        parent::__construct($app, __CLASS__);
    }

    // ------------------- action method ---------------------------------------

    public function index() {
        if (empty($this->app['action_alias'])) {
            return $this->app->redirect($this->app['controller_alias'] . '/about-license-keys');
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    public function about_license_keys() {
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    public function license_keys_list() {
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $attribute = $this->getDropdownAttribute();
        $this->checkDropdownAttribute($attribute);
        $this->app['dropdownAttribute'] = $attribute;

        $this->getCodeFilters();

        $requests = $this->db->getAllFromTable('smac_codes', 'request', 'request');

        $this->app['allRequests'] = array_filter(array_map(function($row){
            return !empty($row['request']) ? array('id' => $row['request'], 'title' => $row['request']): FALSE;
        }, !empty($requests) ? $requests: array()));

        $this->app['allStatuses'] = array(
            array('id' => 'not_activated',      'title' => $this->setLocalization(\SMACCode::STATUS_NOT_ACTIVATED)),
            array('id' => 'activated',          'title' => $this->setLocalization(\SMACCode::STATUS_ACTIVATED)),
            array('id' => 'manually_entered',   'title' => $this->setLocalization(\SMACCode::STATUS_MANUALLY_ENTERED)),
            array('id' => 'blocked',            'title' => $this->setLocalization(\SMACCode::STATUS_BLOCKED))
        );

        $this->app['allKeyTypes'] = array(
            array('id' => '1',  'title' => $this->setLocalization('Standard')),
            array('id' => '2',  'title' => $this->setLocalization('Advanced')),
        );

        $devices = $this->db->getAllFromTable('smac_codes', 'device', 'device');

        $this->app['allDevices'] = array_filter(array_map(function($row){
            return !empty($row['device']) ? array('id' => $row['device'], 'title' => $row['device']): FALSE;
        }, !empty($devices) ? $devices: array()));

        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    //----------------------- ajax method --------------------------------------

    public function license_keys_list_json($local_use = FALSE){

        if (!$this->isAjax && $local_use === FALSE) {
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

        $filds_for_select = $this->getCodesFields();
        $error = $this->setLocalization('Error');
        $param = (!empty($this->data)?$this->data: $this->postData);

        $query_param = $this->prepareDataTableParams($param, array('action', 'RowOrder', '_'));

        if (!isset($query_param['where'])) {
            $query_param['where'] = array();
        }

        $filter = $this->getCodeFilters();

        $query_param['where'] = array_merge($query_param['where'], $filter);

        if (empty($query_param['select'])) {
            $query_param['select'] = array_values($filds_for_select);
        }

        $this->cleanQueryParams($query_param, array_keys($filds_for_select), $filds_for_select);

        if (!empty($param['id'])) {
            $query_param[is_array($param['id']) ? 'in': 'where']['S_C.`id`'] = $param['id'];
        }

        $response['recordsTotal'] = $this->db->getLicenseKeysRowsList($query_param, 'ALL');
        $response["recordsFiltered"] = $this->db->getLicenseKeysRowsList($query_param);

        if (empty($query_param['limit']['limit'])) {
            $query_param['limit']['limit'] = 50;
        } elseif ($query_param['limit']['limit'] == -1) {
            $query_param['limit']['limit'] = FALSE;
        }

        $result = $this->db->getLicenseKeysList($query_param);

        $is_ajax = $this->isAjax;
        $response['data'] = array_map(function($row) use ($is_ajax){
            $row['status_flag'] = strtolower(str_replace(' ', '_', $row['status']));
            $row['added'] = (int) strtotime($row['added']) * ($is_ajax? 1000 : 1);
            $row['action'] = $row['status'] == \SMACCode::STATUS_BLOCKED ? 'active': 'block';
            switch ($row['status']){
                case \SMACCode::STATUS_BLOCKED: {
                    $row['action'] = 'active';
                    break;
                }
                case \SMACCode::STATUS_NOT_ACTIVATED: {
                    $row['action'] = 'block';
                    break;
                }
                default: {
                    $row['action'] = 'ignore';
                }
            }
            $row['RowOrder'] = "dTRow_" . $row['id'];
            return $row;
        }, $result);

        $response['data'] = $this->setLocalization($response['data'], 'status');

        $response["draw"] = !empty($this->data['draw']) ? $this->data['draw'] : 1;

        $error = "";
        if ($this->isAjax && !$local_use) {
            $response = $this->generateAjaxResponse($response);
            return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
        } else {
            return $response;
        }
    }

    public function upload_key_file() {

        if (!$this->isAjax || $this->method != 'POST') {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $data = array();
        $data['action'] = 'updateTableData';
        $data['data'] = array();
        $error = $this->setLocalization('Upload failed');

        $storage = new \Upload\Storage\FileSystem('/tmp', TRUE);
        $file = new \Upload\File('files', $storage);

        try {
            // Success!
            $file->upload();
            $result = \SMACCode::importFile($file->getNameWithExtension(), file_get_contents($file->getPath() . '/' .$file->getNameWithExtension()));
            @unlink($file->getPath() . '/' .$file->getNameWithExtension());

            if ($result !== FALSE) {
                $data['msg'] = $this->setLocalization('License keys is imported ');
                $error = '';
            }
        } catch (\Exception $e) {
            // Fail!
            $data['msg'] = $error = $e->getMessage();
        }

        $response = $this->generateAjaxResponse($data);
        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }

    public function toggle_key_status() {
        if (empty($this->postData['id']) || (!is_numeric($this->postData['id'])) || empty($this->postData['action'])) {
            if ((empty($this->postData['group_key']) || !is_array($this->postData[$this->postData['group_key']])) || empty($this->postData['action'])) {
                $this->app->abort(404, $this->setLocalization('Page not found'));
            }
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $data = array(
            'id' => array(),
            'action' => 'updateTableRow',
            'data' => array(),
            'msg_list' => array()
        );

        $curr_list = $this->license_keys_list_json(TRUE);
        $action = $this->postData['action'];
        $params = array(
            'updated' => 'NOW()'
        );

        reset($curr_list['data']);
        while (list($num, $code_row) = each($curr_list['data'])) {
            $result = 0;
            if ($code_row['status_flag'] !== 'activated' && $code_row['status_flag'] !== 'manually_entered') {
                if ($action === 'block') {
                    $params['status'] = \SMACCode::STATUS_BLOCKED;
                    $curr_list['data'][$num]['status_flag'] = strtolower(str_replace(' ', '_', \SMACCode::STATUS_BLOCKED));
                } else {
                    $params['status'] = 0 === (int) $code_row['user_id'] ? \SMACCode::STATUS_NOT_ACTIVATED : \SMACCode::STATUS_ACTIVATED;
                    $curr_list['data'][$num]['status_flag'] = strtolower(str_replace(' ', '_', (0 === (int) $code_row['user_id'] ? \SMACCode::STATUS_NOT_ACTIVATED : \SMACCode::STATUS_ACTIVATED)));
                }

                $result = $this->db->updateLicenseKeys($params, $code_row['id']);

                if ($result !== 0) {
                    $data['id'][$code_row['id']] = $result;
                    $curr_list['data'][$num]['status'] = $params['status'];
                    $curr_list['data'][$num]['action'] = $action === 'block' ? 'active' : 'block';
                }
            } else {
                $data['id'][$code_row['id']] = -1;
                $result = FALSE;
                if (!array_key_exists('additional', $data)){
                    $data['additional']['action'] = 'JSErrorModalBox';
                }
                if (empty($data['additional']['msg'])) {
                    $data['additional']['msg'] = $this->setLocalization('Not changed') . ' id:' . $code_row['id'];
                } else {
                    $data['additional']['msg'] .= (', ' . $code_row['id']) ;
                }
            }
            $data['msg_list'][$code_row['id']] = $this->groupMessageList($code_row['id'], $result, $this->UPDATE_MSG_TMPL());
        }
        $result = count($data['id']);
        $data['id'] = array_filter($data['id']);
        $error = FALSE;

        if (empty($data['id'])) {
            $error = ($result !== count($data['id']));
            if (!$error) {
                $data['msg'] = $error = $this->setLocalization('Nothing to do');
            } else {
                $data['msg'] = $this->setLocalization('Some errors found');
            }
        } else {

            $curr_list['data'] = $this->setLocalization($curr_list['data'], 'status');

            $data = array_merge_recursive($data, $curr_list);
            $changed = array_filter($data['id'], function ($val) {return $val !== -1;});

            $data['id'] = array_keys($data['id']);

            if (!empty($changed)) {
                $msg_str = 'id: ' . implode(', ', array_keys($changed));
                $data['msg'] = $this->setLocalization('Keys {updchid} has been updated', '', $msg_str, array('{updchid}' => $msg_str));
            }
        }

        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }

    //------------------------ service method ----------------------------------

    private function getDropdownAttribute(){
        $attribute = array(
            array('name' => 'id',       'title' => $this->setLocalization('ID'),                'checked' => FALSE),
            array('name' => 'code',     'title' => $this->setLocalization('License key'),       'checked' => TRUE),
            array('name' => 'key_type','title' => $this->setLocalization('Key type'),           'checked' => TRUE),
            array('name' => 'request',  'title' => $this->setLocalization('Request ID'),        'checked' => TRUE),
            array('name' => 'added',    'title' => $this->setLocalization('Date added'),        'checked' => TRUE),
            array('name' => 'status',   'title' => $this->setLocalization('Status'),            'checked' => TRUE),
            array('name' => 'user_id',  'title' => $this->setLocalization('User ID'),           'checked' => TRUE),
            array('name' => 'device',   'title' => $this->setLocalization('Device'),            'checked' => TRUE),
            array('name' => 'action',   'title' => $this->setLocalization('Actions'),           'checked' => TRUE)
        );
        return $attribute;
    }

    private function getCodesFields(){
        return array(
            "id" => "S_C.`id` as `id`",
            "code" => "S_C.`code` as `code`",
            "key_type" => "IF(SUBSTRING(S_C.`code`, 2, 1) IN (1, 2), 1, 2) as `key_type`",
            "request" => "S_C.`request` as `request`",
            "added" => "S_C.`added` as `added`",
            "status" => "S_C.`status` as `status`",
            "user_id" => "S_C.`user_id` as `user_id`",
            "device" => "S_C.`device` as `device`"
        );
    }

    private function getCodeFilters(){
        $filters = array();

        if (array_key_exists('filters', $this->data)) {

            if (array_key_exists('key_type', $this->data['filters']) && (string)$this->data['filters']['key_type'] !== '0') {
                $filters['SUBSTRING(`code`, 2, 1) IN' . ((string) $this->data['filters']['key_type'] == '1' ? '(1, 2)': '(3, 4)') . ' AND 1 '] = '1';
            }
            if (array_key_exists('request', $this->data['filters']) && (string)$this->data['filters']['request'] !== '0') {
                $filters['request'] = $this->data['filters']['request'];
            }
            if (array_key_exists('status', $this->data['filters']) && ((string)$this->data['filters']['status']) !== '0') {
                $const = strtoupper($this->data['filters']['status']);
                $filters['status'] = constant("\SMACCode::STATUS_$const");
            }
            if (array_key_exists('device', $this->data['filters']) && ((string)$this->data['filters']['device']) !== '0') {
                $filters['device'] = urlencode($this->data['filters']['device']);
            }

            $this->app['filters'] = $this->data['filters'];
        } else {
            $this->app['filters'] = array();
        }
        return $filters;
    }

    private function UPDATE_MSG_TMPL(){
        return array(
            'success' => array(
                'status' => TRUE,
                'msg' => $this->setLocalization('Key id:{updid} updated')
            ),
            'failed' => array(
                'status' => FALSE,
                'msg' => $this->setLocalization('Key id:{updid} not updated')
            ),
            'error' => array(
                'status' => FALSE,
                'msg' => $this->setLocalization('Update key id:{updid} ended with an error')
            )
        );
    }
}