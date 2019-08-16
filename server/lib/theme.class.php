<?php

use \Stalker\Lib\Core\Mysql;
use \Stalker\Lib\Core\Config;

class Theme
{
    private $alias = '';
    private $name = '';
    private $variables = array();
    private $original_variables = array();
    private $is_default = false;
    private $default_theme = '';
    private $package_info = null;
    private $screen_width = 1920;
    private $screen_height = 1080;
    private $last_updated = 0;
    private $screen_map = array(
        480  => '720x480',
        576  => '720x576',
        720  => '1280x720',
        1080 => '1920x1080'
    );

    public function __construct($alias) {
        $this->alias = $alias;
        $this->init();
    }

    private function init(){

        $theme = Mysql::getInstance()->from('launcher_apps')
            ->where(array('type' => 'theme', 'alias' => $this->alias))->get()->first();

        if (!$theme){
            throw new ThemeNotFound('Theme not found');
        }

        $this->name = $theme['name'];
        $this->last_updated = strtotime($theme['updated']);

        $customization = Mysql::getInstance()->from('themes')->where(array('alias' => $this->alias))->get()->first();

        $this->default_theme = Mysql::getInstance()->from('settings')->get()->first('default_launcher_template');

        $this->is_default = $this->default_theme == 'smart_launcher:'.$this->alias;

        if ($customization) {

            if ($variables = json_decode($customization['variables'], true)) {
                $this->variables = $variables;
            }

            $customization_updated_time = strtotime($customization['updated']);
            $customization_added_time = strtotime($customization['updated']);

            $this->last_updated = max($this->last_updated, $customization_updated_time, $customization_added_time);
        }

        $theme_path = $this->getPackagePath();

        if ($theme_path){
            $variables_path = $theme_path.'/src/vars.json';
            if (is_readable($variables_path)){
                if ($variables = json_decode(file_get_contents($variables_path), true)){
                    $this->original_variables = $variables;
                }
            }
        }
    }

    /**
     * Save customization
     */
    private function save(){

        $customization = Mysql::getInstance()->from('themes')->where(array('alias' => $this->alias))->get()->first();

        if ($this->is_default && $this->default_theme != 'smart_launcher:'.$this->alias){
            Mysql::getInstance()->update('settings', array('default_launcher_template' => 'smart_launcher:'.$this->alias));
        }

        if ($customization) {
            Mysql::getInstance()->update('themes',
                array(
                    'variables' => json_encode($this->variables),
                    'updated'   => 'NOW()'
                ),
                array('id' => $customization['id']));
        }else{
            Mysql::getInstance()->insert('themes', array(
                'alias'     => $this->alias,
                'variables' => json_encode($this->variables),
                'added'     => 'NOW()'
            ));
        }
    }

    public function getName(){
        return $this->name;
    }

    /**
     * Set theme as default.
     */
    public function setAsDefault(){
        $this->is_default = true;
        $this->save();
    }

    /**
     * @param array $variables
     */
    public function setVariables($variables) {
        $this->variables = $variables;
        $this->save();
    }

    /**
     * @param string $name
     * @param string $value
     * @param bool $flush
     */
    public function setVariable($name, $value, $flush = false) {
        $this->variables[$name] = $value;
        if ($flush){
            $this->save();
        }
    }

    /**
     * @param string $resolution For example '1920x1080'
     */
    public function setResolution($resolution){

        if (strpos($resolution, 'x')){
            $separator = 'x';
        } elseif (strpos($resolution, 'X')) {
            $separator = 'X';
        } elseif (strpos($resolution, '*')) {
            $separator = '*';
        }

        if (isset($separator)){
            list($this->screen_width, $this->screen_height) = explode($separator, $resolution);
        }
    }

    /**
     * @param int $screen_height
     * @throws ThemeNotFound
     */
    public function setScreenHeight($screen_height){

        if (!isset($this->screen_map[$screen_height])){
            throw new ThemeNotFound('Not supported resolution');
        }

        $this->setResolution($this->screen_map[$screen_height]);

    }

    /**
     * All theme variables.
     *
     * @return array|bool
     */
    public function getVariables() {

        $original_variables = $this->original_variables;

        if (!empty($original_variables['bodyBgFilename']['value'])){

            $bg_image = $this->getOriginalBackgroundImageUrl($this->screen_width, $this->screen_height);

            if ($bg_image){
                $original_variables['bodyBgFilename']['value'] = $bg_image;
            }
        }

        $custom_variables = $this->variables;

        if (!empty($this->variables['bodyBgFilename'])){

            $bg_image = $this->getCustomBackgroundImageUrl($this->screen_width, $this->screen_height);

            if ($bg_image){
                $custom_variables['bodyBgFilename'] = array('type' => 'string', 'value' => $bg_image);
            }else{
                unset($custom_variables['bodyBgFilename']);
            }
        } elseif (isset($this->variables['bodyBgFilename']) && !$this->variables['bodyBgFilename']){
            unset($custom_variables['bodyBgFilename']);
        }

        if (!empty($this->variables['logoFilename'])){

            $logo_image = $this->getCustomLogoImageUrl($this->screen_width, $this->screen_height);

            if ($logo_image){
                $custom_variables['logoFilename'] = array('type' => 'string', 'value' => $logo_image);
            }else{
                unset($custom_variables['logoFilename']);
            }
        } elseif (isset($this->variables['logoFilename']) && !$this->variables['logoFilename']){
            unset($custom_variables['logoFilename']);
        }

        if (!empty($this->variables['logoAlign'])){
            $custom_variables['logoAlign'] = array('type' => 'string', 'value' => $this->variables['logoAlign']);
        } elseif (isset($this->variables['logoAlign']) && !$this->variables['logoAlign']){
            unset($custom_variables['logoAlign']);
        }

        $merged = array_merge($original_variables, $custom_variables);

        return $merged;
    }

    private function getPackageInfo() {

        if ($this->package_info){
            $info = $this->package_info;
        }else{
            try {
                $info = SmartLauncherAppsManager::getInstance()->getAppInfoByUrl($this->alias);
            } catch (Exception $e){
                error_log($e->getMessage());
            }
        }

        if (!empty($info)){
            $this->package_info = $info;
        }

        return isset($info) ? $info : false;
    }

    private function getPackagePath() {

        $info = $this->getPackageInfo();

        if (!empty($info) && $info['app_path'] && $info['installed']){
            return $info['app_path'];
        }

        return false;
    }

    private function getCustomizationPath(){

        $themes_path = PROJECT_PATH . "/../misc/themes/".$this->alias.'/';

        if (!is_dir($themes_path)){
            umask(0);
            mkdir($themes_path, 0777, true);
        }

        return realpath($themes_path);
    }

    private function getCustomizedVariables() {
        return $this->variables;
    }

    /**
     * Return original background image url.
     *
     * @param int $width
     * @param int $height
     * @return null|string
     */
    public function getOriginalBackgroundImageUrl($width = 1920, $height = 1080) {

        $resolution = $this->pickImageResolution($width, $height);
        $theme = $this->getPackageInfo();
        $theme_path = $this->getPackagePath();

        if (is_dir($theme_path.'/img/'.$resolution)
            && isset($this->original_variables['bodyBgFilename']['value'])
            && is_readable($theme_path.'/img/'.$resolution.'/'.$this->original_variables['bodyBgFilename']['value'])){

            return 'http'.(((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) ? 's' : '')
                .'://'.(strpos($_SERVER['HTTP_HOST'], ':') > 0 ? $_SERVER['HTTP_HOST'] : $_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT'])
                .'/'.Config::getSafe('launcher_apps_path', 'stalker_launcher_apps/')
                .$this->alias
                .'/'.$theme['current_version'].'/img/'.$resolution.'/'.$this->original_variables['bodyBgFilename']['value'];
        }

        return null;
    }

    /**
     * Return customized background image url.
     *
     * @param int $width
     * @param int $height
     * @return null|string
     */
    public function getCustomBackgroundImageUrl($width = 1920, $height = 1080) {

        $resolution = $this->pickImageResolution($width, $height);
        $customization_path = $this->getCustomizationPath();

        if (is_dir($customization_path.'/'.$resolution)
            && !empty($this->variables['bodyBgFilename']) && !empty($this->variables['bodyBgFilename'][$height])
            && is_readable($customization_path.'/'.$resolution.'/'.$this->variables['bodyBgFilename'][$height])){

            return 'http'.(((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) ? 's' : '')
                .'://'.(strpos($_SERVER['HTTP_HOST'], ':') > 0 ? $_SERVER['HTTP_HOST'] : $_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT'])
                .'/'.Config::get('portal_url')
                . 'misc/themes/' . $this->alias . '/' . $resolution . '/' . $this->variables['bodyBgFilename'][$height];
        }

        return null;
    }

    /**
     * Return customized logo url.
     *
     * @param int $width
     * @param int $height
     * @return null|string
     */
    public function getCustomLogoImageUrl($width = 1920, $height = 1080){

        $resolution = $this->pickImageResolution($width, $height);
        $customization_path = $this->getCustomizationPath();

        if (is_dir($customization_path.'/'.$resolution)
            && !empty($this->variables['logoFilename'])
            && is_readable($customization_path.'/'.$resolution.'/'.$this->variables['logoFilename'])){

            return 'http'.(((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) ? 's' : '')
                .'://'.(strpos($_SERVER['HTTP_HOST'], ':') > 0 ? $_SERVER['HTTP_HOST'] : $_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT'])
                .'/'.Config::get('portal_url')
                . 'misc/themes/' . $this->alias . '/' . $resolution . '/' . $this->variables['logoFilename'];
        }

        return null;
    }

    private function pickImageResolution($width, $height){
        if ($height > 720) {
            return 1080;
        } elseif ($height > 576) {
            return 720;
        } elseif ($height > 480) {
            return 576;
        } else {
            return 480;
        }
    }

    /**
     * Save and resize background image.
     *
     * @param string $file Path to a file.
     * @param int $width
     * @param int $height
     * @return bool
     * @throws ThemeImageException
     */
    public function saveBackgroundImage($file, $width, $height) {

        if (!in_array($height, array(480, 576, 720, 1080))){
            throw new ThemeImageException('Not supported resolution');
        }

        $ext = pathinfo($file, PATHINFO_EXTENSION);

        if (!$ext){
            $ext = 'jpg';
        }

        try{
            $image = new Imagick($file);
        } catch (ImagickException $e) {
            throw new ThemeImageException('Imagick error: '.$e->getMessage());
        }

        $resize = $image->resizeImage($width, $height, Imagick::FILTER_LANCZOS, 1);

        if (!$resize){
            throw new ThemeImageException('Unable to resize image');
        }

        $save_path = PROJECT_PATH . '/../' . 'misc/themes/' . $this->alias . '/' . $height;

        if (!is_dir($save_path)){
            umask(0);
            mkdir($save_path, 0777, true);
        }

        $filename = 'bg_'.md5_file($file).'.'.$ext;

        $write = $image->writeImage($save_path .'/'.$filename);

        if (!$write){
            throw new ThemeImageException('Unable to save re-sized image');
        }

        if (!isset($this->variables['bodyBgFilename']) || !is_array($this->variables['bodyBgFilename'])){
            $this->variables['bodyBgFilename'] = array();
        }

        $this->variables['bodyBgFilename'][$height] = $filename;

        $this->setVariable('bodyBgFilename', $this->variables['bodyBgFilename']);

        $image->destroy();

        // resize into smaller resolution
        if ($height == 1080){
            $this->saveBackgroundImage($file, 1280, 720);
        } elseif ($height == 576){
            $this->saveBackgroundImage($file, 720, 480);
        }

        $this->save();

        if (is_file($file)){
            unlink($file);
        }

        return true;
    }

    /**
     * Save and resize (?) logo image.
     *
     * @param string $file Path to a file.
     * @param string $align
     * @return bool
     * @throws ThemeImageException
     */
    public function saveLogo($file, $align = 'left') {

        $ext = pathinfo($file, PATHINFO_EXTENSION);

        if (!$ext){
            $ext = 'jpg';
        }

        $filename = 'logo_'.md5_file($file).'.'.$ext;

        foreach (array(480, 576, 720, 1080) as $height){

            $save_path = PROJECT_PATH . '/../' . 'misc/themes/' . $this->alias . '/' . $height;

            if (!is_dir($save_path)){
                umask(0);
                mkdir($save_path, 0777, true);
            }

            if (!copy($file, $save_path.'/'.$filename)){
                throw new ThemeImageException('Unable to save logo image');
            }
        }

        $this->setVariable('logoAlign', $align);
        $this->setVariable('logoFilename', $filename);
        $this->save();

        if (is_file($file)){
            unlink($file);
        }

        return true;
    }

    /**
     * Reset customization.
     */
    public function reset(){
        $this->setVariables(array());
    }

    /**
     * @param int $width
     * @param int $height
     */
    public function resetBackgroundImage($width, $height){

        if (isset($this->variables['bodyBgFilename'][$height])){
            unset($this->variables['bodyBgFilename'][$height]);
            $this->setVariable('bodyBgFilename', $this->variables['bodyBgFilename'], true);
        }
    }

    /**
     * @param int $name
     */
    public function resetParam($name){

        if (isset($this->variables[$name])){
            unset($this->variables[$name]);
            $this->setVariable($name, '', true);
        }
    }

    public function getCssUrl(){

        $theme = $this->getPackageInfo();

        $save_path = PROJECT_PATH . '/../' . 'misc/themes/' . $this->alias . '/build/' . $theme['current_version'];

        if (!is_dir($save_path)){
            $theme_path = $this->getPackagePath();
            self::copyRecursive($theme_path, $save_path);
        }

        if (!is_readable($save_path.'/src/'.$this->screen_height.'.scss')){
            return 'http'.(((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) ? 's' : '')
                .'://'.(strpos($_SERVER['HTTP_HOST'], ':') > 0 ? $_SERVER['HTTP_HOST'] : $_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT'])
                .'/'.Config::getSafe('launcher_apps_path', 'stalker_launcher_apps/')
            .$this->alias
            .'/'.$theme['current_version'].'/'.$this->screen_height.'.css';
        }

        require_once PROJECT_PATH."/lib/scssphp/scss.inc.php";

        $scss = new Leafo\ScssPhp\Compiler();

        $css_file = $save_path.'/'.$this->screen_height.'-'.$this->last_updated.'.css';

        if (!is_readable($css_file)){
            $variables = $this->convertVariables();
            file_put_contents($save_path.'/src/vars.scss', $variables);

            chdir($save_path.'/src/');

            $css = $scss->compile(file_get_contents($save_path.'/src/'.$this->screen_height.'.scss'));
            $this->clearByMask($save_path, $this->screen_height.'-');
            file_put_contents($css_file, $css);
        }

        return  'http'.(((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) ? 's' : '')
            .'://'.(strpos($_SERVER['HTTP_HOST'], ':') > 0 ? $_SERVER['HTTP_HOST'] : $_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT'])
            .'/'.Config::get('portal_url')
            . 'misc/themes/' . $this->alias . '/build/' . $theme['current_version'] . '/' .$this->screen_height.'-'.$this->last_updated.'.css';
    }

    private function clearByMask($path, $mask){

        if (!is_dir($path)){
            return;
        }

        $files = array_diff(scandir($path), array('.','..'));

        foreach ($files as $file) {
            if (strpos($file, $mask) === 0){
                unlink($path.'/'.$file);
            }
        }
    }

    private function convertVariables(){
        $scss_variables = '';
        $variables = $this->getVariables();

        if (isset($variables['logoFilename'])){
            $parts = parse_url($variables['logoFilename']['value']);
            $variables['logoFilename']['value'] = str_repeat('../', 9).$parts['path'];
        }

        if (isset($variables['bodyBgFilename'])){
            $parts = parse_url($variables['bodyBgFilename']['value']);
            $variables['bodyBgFilename']['value'] = str_repeat('../', 9).$parts['path'];
        }

        foreach ($variables as $name => $value){
            $scss_variables .= '$'.$name.': '.$this->convertValueToScss($value).";\n";
        }

        return $scss_variables;
    }

    public function getRgbVariables(){
        $converted_variables = array();
        $variables = $this->getVariables();

        foreach ($variables as $name => $value){
            if ($value['type'] == 'color'){
                $converted_variables[$name] = array(
                    'type'  => 'color',
                    'value' => $this->colorToRgba($value)
                );
            }else{
                $converted_variables[$name] = $value;
            }
        }

        return $converted_variables;
    }

    public function getRgbaHexVariables(){
        $converted_variables = array();
        $variables = $this->getVariables();

        foreach ($variables as $name => $value){
            if ($value['type'] == 'color'){
                $converted_variables[$name] = array(
                    'type'  => 'color',
                    'value' => $this->colorToRgbaHex($value)
                );
            }else{
                $converted_variables[$name] = $value;
            }
        }

        return $converted_variables;
    }

    public function getArgbHexVariables(){
        $converted_variables = array();
        $variables = $this->getVariables();

        foreach ($variables as $name => $value){
            if ($value['type'] == 'color'){
                $converted_variables[$name] = array(
                    'type'  => 'color',
                    'value' => $this->colorToArgbHex($value)
                );
            }else{
                $converted_variables[$name] = $value;
            }
        }

        return $converted_variables;
    }

    private function convertValueToScss($value){

        if ($value['type'] == 'string'){
            return "'".$value['value']."'";
        } elseif ($value['type'] == 'color'){
            return $this->colorToRgba($value);
        } else {
            return $value['value'];
        }
    }

    private function colorToRgba($raw){
        return 'rgba('.$raw['r'].', '.$raw['g'].', '.$raw['b'].', '.(isset($raw['o']) ? $raw['o'] : 1).')';
    }

    private function colorToRgbaHex($raw){
        return '0x'.sprintf("%02X%02X%02X%02X", $raw['r'], $raw['g'], $raw['b'], (isset($raw['o']) ? $raw['o'] : 1) * 255);
    }

    private function colorToArgbHex($raw){
        return '0x'.sprintf("%02X%02X%02X%02X", (isset($raw['o']) ? $raw['o'] : 1) * 255, $raw['r'], $raw['g'], $raw['b']);
    }

    private static function copyRecursive($src, $dst) {

        $dir = opendir($src);
        mkdir($dst, 0777, true);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                if ( is_dir($src . '/' . $file) ) {
                    self::copyRecursive($src . '/' . $file, $dst . '/' . $file);
                }
                else {
                    copy($src . '/' . $file,$dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }
}

class ThemeNotFound extends Exception {};
class ThemeImageException extends Exception {};
