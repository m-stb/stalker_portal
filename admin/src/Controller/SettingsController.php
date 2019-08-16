<?php

namespace Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request as Request;
use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormFactoryInterface as FormFactoryInterface;
use Stalker\Lib\Core\Middleware;

class SettingsController extends \Controller\BaseStalkerController {

    private $theme_path = '../../c/template/';

    private $theme_preset = array(
        'id'     => '',
        'name'    => '',
        'previews' => '',
        'type' => '',
        'default' => FALSE,
        'devices' => array('pc', 'laptop', 'phone', 'tablet'),
        'original_bg' => array(
            1080 => '',
            720 => '',
            576 => '',
            480 => '',
        ),
        'bg' => array(
            1080 => '',
            720 => '',
            576 => '',
            480 => '',
        ),
        'logo' => array(
            1080 => '',
            720 => '',
            576 => '',
            480 => '',
            'align' => 'left'
        )
    );

    public function __construct(Application $app) {
        parent::__construct($app, __CLASS__);
    }

    // ------------------- action method ---------------------------------------
    
    public function index() {
        
        if (empty($this->app['action_alias'])) {
            return $this->app->redirect($this->app['controller_alias'] . '/themes');
        }
        
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        } 
        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    public function themes(){
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        $current = $this->db->getCurrentTheme();
        $this->app['current_theme'] = array('id'=> $current);
        $themes = Middleware::getThemes();
        $theme_arr = array();

        if (is_array($themes)) {
            $launcher_transparent_preview = $this->workURL . "/img/launcherpreview/launcher@3x.png";
            reset($themes);
            while (list($key, $row) = each($themes)) {

                $theme_arr[$key] = array_replace($this->theme_preset, $row);
                if ($theme_arr[$key]['type'] !== 'classic') {
                    $theme_arr[$key]['preview'] = $launcher_transparent_preview;
                    $launcher_theme = new Theme($theme_arr[$key]['alias']);

                    reset($theme_arr[$key]['bg']);
                    while (list($res, $path) = each($theme_arr[$key]['bg'])){
                        if (!($theme_arr[$key]['bg'][$res] = $launcher_theme->getCustomBackgroundImageUrl(NULL, $res))){
                            $theme_arr[$key]['bg'][$res] = $launcher_theme->getOriginalBackgroundImageUrl(NULL, $res);
                        }
                        $theme_arr[$key]['logo'][$res] = $launcher_theme->getCustomLogoImageUrl(NULL, $res);
                        if (!isset($theme_arr[$key]['bg'][$res])) {
                            $theme_arr[$key]['bg'][$res] = '';
                        }

                        if (!isset($theme_arr[$key]['logo'][$res])) {
                            $theme_arr[$key]['logo'][$res] = '';
                        }
                    }
                    $theme_arr[$key]['logo']['align'] = $launcher_theme->getThemeVar('logoAlign', 'left');
                } else {
                    $theme_arr[$key]['devices'] = array('pc');
                }
                $theme_arr[$key]['type_name'] = ucwords(str_replace('_', ' ', $theme_arr[$key]['type']));
                if (strpos($theme_arr[$key]['name'], 'Stalker 5x - ') !== FALSE) {
                    $theme_arr[$key]['name'] = ucfirst(str_replace('Stalker 5x - ', '', $theme_arr[$key]['name']));
                }
            }
        }

        krsort($theme_arr);

        $this->app['allData'] = $theme_arr;

        $attribute = $this->getDropdownAttribute();
        $this->checkDropdownAttribute($attribute);
        $this->app['dropdownAttribute'] = $attribute;
        
        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    public function themes_edit(){
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        if ($this->method == 'POST' && !empty($this->postData['id'])) {
            $id = $this->postData['id'];
        } else if ($this->method == 'GET' && !empty($this->data['id'])) {
            $id = $this->data['id'];
        } else {
            $id = FALSE;
        }

        $themes = Middleware::getThemes();

        if ($id && array_key_exists($id, $themes)) {

            $theme = array_replace($this->theme_preset, $themes[$id]);
            $launcher_theme = new Theme($theme['alias']);

            if (array_key_exists('logoAlign', $this->postData)) {
                $launcher_theme->setVariable('logoAlign', $this->postData['logoAlign'], TRUE);
                if ($this->postData['logoAlign'] != $launcher_theme->getThemeVar('logoAlign', 'left')) {
                    $launcher_theme->resetParam('logoAlign');
                }
            }

            if (array_key_exists('to_default', $this->postData)) {

                if (array_key_exists('all', $this->postData['to_default'])) {
                    $launcher_theme->reset();
                } else {
                    if (array_key_exists('background_image', $this->postData['to_default'])) {
                        foreach ($this->postData['to_default']['background_image'] as $height) {
                            $launcher_theme->resetBackgroundImage(NULL, $height);
                        }
                    }
                    if (array_key_exists('logo_image', $this->postData['to_default'])) {
                        $launcher_theme->resetParam('logoAlign');
                        $launcher_theme->resetParam('logoFilename');
                    }
                }
            }

            reset($theme['bg']);
            while (list($res, $path) = each($theme['bg'])){
                $theme['original_bg'][$res] = $launcher_theme->getOriginalBackgroundImageUrl(NULL, $res);
                $theme['bg'][$res] = $launcher_theme->getCustomBackgroundImageUrl(NULL, $res);
                if (empty($theme['bg'][$res])) {
                    $theme['bg'][$res] = $theme['original_bg'][$res];
                }
                $theme['logo'][$res] = $launcher_theme->getCustomLogoImageUrl(NULL, $res);
            }

            $theme['logo']['align'] = $launcher_theme->getThemeVar('logoAlign', 'left');

            $this->app['theme_name'] = $theme['name'];
            $this->app['launcher_theme'] = $theme;

        } else {
            $this->app['theme_name'] = $this->setLocalization('Undefined');
        }

        $this->app['breadcrumbs']->addItem($this->setLocalization('Appearance'), $this->app['controller_alias'] . '/themes');
        $this->app['breadcrumbs']->addItem($this->setLocalization('Edit theme'). ' "' . $this->app['theme_name'] . '"');

        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }

    public function common() {
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        
        $attribute = $this->getCommonDropdownAttribute();
        $this->checkDropdownAttribute($attribute);
        $this->app['dropdownAttribute'] = $attribute;

        $this->app['stbGroups'] = $this->db->getAllFromTable('stb_groups');

        return $this->app['twig']->render($this->getTemplateName(__METHOD__));
    }
    
    //----------------------- ajax method --------------------------------------

    public function set_current_theme(){
        if (!$this->isAjax || $this->method != 'POST') {
            $this->app->abort(404, 'Page not found');
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $data = array(
            'theme' => array(
                'default' => $this->setLocalization('not changed'),
                'default_launcher' => $this->setLocalization('not changed')
            )
        );
        $error = $this->setLocalization('There is no such skin');
        $themes = Middleware::getThemes();

        if (!empty($themes) && (!empty($this->postData['default']) || !empty($this->postData['default_launcher']))) {
                reset($themes);
                $result = FALSE;
                while(list($id, $theme) = each($themes)) {
                    if (empty($this->postData['default']) && empty($this->postData['default_launcher'])) {
                        $error = '';
                        break;
                    }
                    if ($theme['id'] == $this->postData['default'] && (($result = $this->db->setCurrentTheme($this->postData['default'])) || is_numeric($result))){
                        if ($result !== 0) {
                            $data['theme']['default'] = $theme['name'];
                            if (strpos($data['theme']['default'], 'Stalker 5x - ') !== FALSE) {
                                $data['theme']['default'] = 'Smart Launcher - ' . ucfirst(str_replace('Stalker 5x - ', '', $data['theme']['default']));
                            } else {
                                $data['theme']['default'] = 'Classic - ' . ucfirst($data['theme']['default']);
                            }
                        }
                        $this->postData['default'] = NULL;
                    }
                    if ($theme['alias'] == $this->postData['default_launcher']){
                        if (!$theme['default_launcher']) {
                            $launcher_theme = new Theme($this->postData['default_launcher']);
                            $launcher_theme->setAsDefault();
                            $data['theme']['default_launcher'] = $theme['name'];
                            if (strpos($data['theme']['default_launcher'], 'Stalker 5x - ') !== FALSE) {
                                $data['theme']['default_launcher'] = 'Smart Launcher - ' . ucfirst(str_replace('Stalker 5x - ', '', $data['theme']['default_launcher']));
                            }
                        }
                        $this->postData['default_launcher'] = NULL;
                    }
                }

            if (empty($this->postData['default']) && empty($this->postData['default_launcher'])) {
                $error = '';
            }

            $data['msg'] = $this->setLocalization('Current TV-theme - "{thmnm}", another platform - "{lthmnm}"', '', TRUE, array('{thmnm}' => $data['theme']['default'], '{lthmnm}' => $data['theme']['default_launcher']));
        }
        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }
    
    public function common_list_json($local_uses = FALSE){

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
            'action' => 'setCommonModal'
        );
        
        $error = $this->setLocalization("Error");
        $param = (!empty($this->data)?$this->data: $this->postData);

        $query_param = $this->prepareDataTableParams($param, array('operations', 'RowOrder', '_'));

        if (!isset($query_param['where'])) {
            $query_param['where'] = array();
        }

        $filds_for_select = $this->getCommonFields();
        $this->cleanQueryParams($query_param, array_keys($filds_for_select), $filds_for_select);

        if (empty($query_param['select'])) {
            $query_param['select'] = array_values($filds_for_select);
        }

        if (!empty($param['id'])) {
            $query_param['where']['I_U_S.id'] = $param['id'];
        }
        
        $response['recordsTotal'] = $this->db->getTotalRowsCommonList();
        $response["recordsFiltered"] = $this->db->getTotalRowsCommonList($query_param['where'], $query_param['like']);

        if (empty($query_param['limit']['limit'])) {
            $query_param['limit']['limit'] = 50;
        } elseif ($query_param['limit']['limit'] == -1) {
            $query_param['limit']['limit'] = FALSE;
        }
        
        if (empty($query_param['order'])) {
            $query_param['order']['id'] = 'asc';
        }
        $commonList = $this->db->getCommonList($query_param);
        $convert = ($this->method == 'GET' || $local_uses);
        $response['data'] = array_map(function($val) use($convert){
            $val['enable'] = (int)$val['enable'];
            if ($convert) {
                $val['require_image_date'] = (int) strtotime($val['require_image_date']);
                if ($val['require_image_date'] < 0) {
                    $val['require_image_date'] = 0;
                }
            }
            $val['RowOrder'] = "dTRow_" . $val['id'];
            return $val;
        }, $commonList);
        $response["draw"] = !empty($this->data['draw']) ? $this->data['draw'] : 1;
        
        $error = "";
        if ($this->isAjax && !$local_uses) {
            $response = $this->generateAjaxResponse($response);
            return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
        } else {
            return $response;
        }
    }
    
    public function save_common_item() {
        
        if (!$this->isAjax || $this->method != 'POST' || empty($this->postData)) {
            $this->app->abort(404, 'Page not found');
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        
        $data = array();
        $data['action'] = 'updateTableData';
        $item = array($this->postData);
        if (empty($this->postData['id'])) {
            $operation = 'insertCommon';
        } else {
            $operation = 'updateCommon';
            $data['id'] = $item['id'] = $this->postData['id'];
        }

        unset($item[0]['id']);
        $error = $this->setLocalization('Failed');
        
        $result = call_user_func_array(array($this->db, $operation), $item);
        if (is_numeric($result)) {
            $error = '';
            if ($result === 0) {
                $data['nothing_to_do'] = TRUE;
            }
            if ($operation == 'updateCommon') {
                $data = array_merge_recursive($data, $this->common_list_json(TRUE));
                $data['action'] = 'updateTableRow';
                $data['msg'] = $this->setLocalization('Changed');
            } else {
                $data['msg'] = $this->setLocalization('Added');
            }
        }
        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }
    
    public function remove_common_item() {
        if (!$this->isAjax || $this->method != 'POST' || empty($this->postData['id'])) {
            $this->app->abort(404, 'Page not found');
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $data = array();
        $data['action'] = 'deleteTableRow';
        $data['id'] = $this->postData['id'];        
        $error = $this->setLocalization('Failed');

        $result = $this->db->deleteCommon(array('id' => $this->postData['id']));
        if (is_numeric($result)) {
            $error = '';
            if ($result === 0) {
                $data['nothing_to_do'] = TRUE;
            }
            $data['msg'] = $this->setLocalization('Deleted');
        }
        
        $response = $this->generateAjaxResponse($data);
        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }
    
    public function toggle_common_item_status() {
        
        if (!$this->isAjax || $this->method != 'POST' || empty($this->postData['id']) || !array_key_exists('enable', $this->postData)) {
            $this->app->abort(404, 'Page not found');
        }

        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }

        $data = array();
        $data['action'] = 'updateTableData';
        $data['id'] = $this->postData['id'];

        $error = $this->setLocalization('Failed');

        $result = $this->db->updateCommon(array('enable' => (int)(!((bool) $this->postData['enable']))), $this->postData['id']);
        if (is_numeric($result)) {
            $error = '';
            if ($result === 0) {
                $data['nothing_to_do'] = TRUE;
            }
            $data = array_merge_recursive($data, $this->common_list_json(TRUE));
            $data['msg'] = $this->setLocalization('Changed');
            $data['action'] = 'updateTableRow';
        }

        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }

    public function upload_theme_img(){
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        $id = FALSE;
        $size = FALSE;

        if ($this->method == 'POST' && !empty($this->postData['id'])) {
            $id = $this->postData['id'];
        }
        if ($this->method == 'POST' && !empty($this->postData['size'])) {
            $size = $this->postData['size'];
        }

        if (!$this->isAjax || $id === FALSE || $size === FALSE) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        $data = array();
        $error = $this->setLocalization('Failed');

        if (!empty($_FILES)){
            list($f_key, $tmp) = each($_FILES);
            if (is_uploaded_file($tmp['tmp_name']) && preg_match("/jpeg|jpg|png/",$tmp['type'])){
                $uploaded = $this->request->files->get($f_key)->getPathname();

                try {
                    $themes = Middleware::getThemes();

                    if ($id && array_key_exists($id, $themes)) {
                        $theme = array_replace($this->theme_preset, $themes[$id]);
                        $launcher_theme = new Theme($theme['alias']);
                        if (is_numeric($size)) {
                            $launcher_theme->saveBackgroundImage($uploaded, NULL, $size);
                        } elseif($size == 'logo') {
                            $position = array_key_exists('logoAlign', $this->postData) && !empty($this->postData['logoAlign']) ? $this->postData['logoAlign']: NULL;
                            $launcher_theme->saveLogo($uploaded, $position);
                        }

                        reset($theme['bg']);
                        while (list($res, $path) = each($theme['bg'])){
                            $theme['original_bg'][$res] = $launcher_theme->getOriginalBackgroundImageUrl(NULL, $res);
                            $theme['bg'][$res] = $launcher_theme->getCustomBackgroundImageUrl(NULL, $res);
                            if (empty($theme['bg'][$res])) {
                                $theme['bg'][$res] = $theme['original_bg'][$res];
                            }
                            $theme['logo'][$res] = $launcher_theme->getCustomLogoImageUrl(NULL, $res);
                        }

                        $theme['logo']['align'] = $launcher_theme->getThemeVar('logoAlign', 'left');

                        $data['theme'] = $theme;
                        $error = '';
                    }


                } catch (\Exception $e) {
                    $error = $e->getMessage();
                }
            }
        }


        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }

    public function themes_reset_to_default(){
        if ($no_auth = $this->checkAuth()) {
            return $no_auth;
        }
        $id = FALSE;

        if ($this->method == 'POST' && !empty($this->postData['id'])) {
            $id = $this->postData['id'];
        }

        if (!$this->isAjax || $id === FALSE) {
            $this->app->abort(404, $this->setLocalization('Page not found'));
        }

        $data = array(
            'data' => array(),
            'action' => "updateTableRow",
            'RowOrder' => $id
        );
        $error = $this->setLocalization('Do not completed');

        try {
            $themes = Middleware::getThemes();

            if ($id && array_key_exists($id, $themes)) {
                $launcher_transparent_preview = $this->workURL . "/img/launcherpreview/launcher@3x.png";
                $theme = array_replace($this->theme_preset, $themes[$id]);
                $launcher_theme = new Theme($theme['alias']);
                $launcher_theme->reset();
                $theme['logo']['align'] = $launcher_theme->getThemeVar('logoAlign', 'left');
                $theme['preview'] = $launcher_transparent_preview;

                reset($theme['bg']);
                while (list($res, $path) = each($theme['bg'])){
                    $theme['original_bg'][$res] = $launcher_theme->getOriginalBackgroundImageUrl(NULL, $res);
                    $theme['logo'][$res] = $launcher_theme->getCustomLogoImageUrl(NULL, $res);
                }

                $theme['type_name'] = ucwords(str_replace('_', ' ', $theme['type']));
                $theme['RowOrder'] = $theme['alias'];
                $data['data'][0] = $theme;
                $data['RowOrder'] = $theme['alias'];
                $error = '';
            }

        } catch (\Exception $e) {
            $error = $e->getMessage();
        }

        $response = $this->generateAjaxResponse($data, $error);

        return new Response(json_encode($response), (empty($error) ? 200 : 500), array('Content-Type' => 'application/json; charset=UTF-8'));
    }

    //------------------------ service method ----------------------------------

    private function getCommonDropdownAttribute(){
        return array(
            array('name'=>'id',                         'title'=>$this->setLocalization('ID'),                      'checked' => TRUE),
            array('name'=>'stb_type',                   'title'=>$this->setLocalization('STB model'),               'checked' => TRUE),
            array('name'=>'require_image_version',      'title'=>$this->setLocalization('STB API version'),         'checked' => TRUE),
            array('name'=>'require_image_date',         'title'=>$this->setLocalization('Image date'),              'checked' => TRUE),
            array('name'=>'update_type',                'title'=>$this->setLocalization('Update type'),             'checked' => TRUE),
            array('name'=>'prefix',                     'title'=>$this->setLocalization('Prefix'),                  'checked' => TRUE),
            array('name'=>'image_description_contains', 'title'=>$this->setLocalization('Image description'),       'checked' => TRUE),
            array('name'=>'image_version_contains',     'title'=>$this->setLocalization('Required STB API version'),'checked' => TRUE),
            array('name'=>'hardware_version_contains',  'title'=>$this->setLocalization('Hardware version'),        'checked' => TRUE),
            array('name'=>'enable',                     'title'=>$this->setLocalization('Automatic update'),        'checked' => TRUE),
            array('name'=>'stb_group_name',             'title'=>$this->setLocalization('User groups'),             'checked' => TRUE),
            array('name'=>'operations',                 'title'=>$this->setLocalization('Operations'),              'checked' => TRUE)
        );
    }

    private function getCommonFields(){
        return array(
            'id'                        => 'I_U_S.id as `id`',
            'stb_type'                  => 'I_U_S.stb_type as `stb_type`',
            'require_image_version'     => 'I_U_S.require_image_version as `require_image_version`',
            'require_image_date'        => 'I_U_S.require_image_date as `require_image_date`',
            'update_type'               => 'I_U_S.update_type as `update_type`',
            'prefix'                    => 'I_U_S.prefix as `prefix`',
            'image_description_contains'=> 'I_U_S.image_description_contains as `image_description_contains`',
            'image_version_contains'    => 'I_U_S.image_version_contains as `image_version_contains`',
            'hardware_version_contains' => 'I_U_S.hardware_version_contains as `hardware_version_contains`',
            'enable'                    => 'I_U_S.enable as `enable`',
            'stb_group_id'              => 'S_G.id as `stb_group_id`',
            'stb_group_name'            => 'S_G.name as `stb_group_name`'
        );
    }

    private function getDropdownAttribute(){
        return array(
            array('name' => 'preview',      'title' => $this->setLocalization('Preview'),           'checked' => TRUE),
            array('name' => 'type',         'title' => $this->setLocalization('Type'),              'checked' => TRUE),
            array('name' => 'name',         'title' => $this->setLocalization('Name'),              'checked' => TRUE),
            array('name' => 'devices',      'title' => $this->setLocalization('Supported devices'), 'checked' => TRUE),
            array('name' => 'operations',   'title' => $this->setLocalization('Operations'),        'checked' => TRUE)
        );
    }
}

class Theme extends \Theme {

    private $ext_variables = array();

    private $valid_values = array(
        'logoAlign' => array('left', 'center', 'right')
    );

    public function __construct($alias) {
        parent::__construct($alias);
    }

    public function getThemeVar($var_name, $default = FALSE){
        if (empty($this->ext_variables)) {
            $this->ext_variables = $this->getVariables();
        }

        if (array_key_exists($var_name, $this->ext_variables) && is_array($this->ext_variables[$var_name]) && array_key_exists('value', $this->ext_variables[$var_name])) {
            $this->ext_variables[$var_name] = $this->ext_variables[$var_name]['value'];
        }

        if (!array_key_exists($var_name, $this->ext_variables) || (array_key_exists($var_name, $this->valid_values) && !in_array($this->ext_variables[$var_name], $this->valid_values[$var_name]))) {
            $this->ext_variables[$var_name] = $default;
        }


        return $this->ext_variables[$var_name];
    }
}
