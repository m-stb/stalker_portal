<?php

chdir(__DIR__);
include __DIR__ . "/common.php";

use Stalker\Lib\Core\Config;

$zone_url = Config::getSafe('max_cdn_pull_zone_url', '');

$write_base_url = !empty($zone_url) ? "document.write(\"<base href='http://$zone_url/' />\");": '';

$language = isset($_GET['language']) ? $_GET['language'] : 'en';

$allowed_languages = Config::get('allowed_locales');
$allowed_languages_map = array();

foreach ($allowed_languages as $loc){
    $allowed_languages_map[substr($loc, 0, 2)] = $loc;
}

if (isset($allowed_languages_map[$language])){
    $locale = $allowed_languages_map[$language];
}elseif (count($allowed_languages_map) > 0){
    reset($allowed_languages_map);
    $locale = $allowed_languages_map[key($allowed_languages_map)];
}else{
    $locale = 'en_GB.utf8';
}

setlocale(LC_MESSAGES, $locale);
putenv('LC_MESSAGES='.$locale);

$app_manager = new SmartLauncherAppsManager($language);
$player_app = $app_manager->getAppInfoByUrl(Config::getSafe('web_player_app_url', ''));

if (!empty($player_app) && $player_app['installed']) {

    $path = $player_app['app_path'] . DIRECTORY_SEPARATOR . 'app' . str_replace('/player', '', $_SERVER['REQUEST_URI']);
    $request = str_replace('/player/', '', $_SERVER['REQUEST_URI']);
    if (empty($request)) {
        $request = 'index.html';
    }

    //file_put_contents('/var/www/test1/stalker_portal/admin/logs/requests.txt', $path . PHP_EOL, FILE_APPEND);

    $path = explode('?', $player_app['app_path'] . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . $request);
    $path = $path[0];
    $ouput = '';
    if (is_file($path) && is_readable($path)) {

        if (!headers_sent()) {
            $mime_type = mime_content_type($path);

            if ($mime_type !== FALSE) {
                $ext = explode('.', $path);
                $ext = end($ext);
                $replace_mime = array(
                    'css' => 'text/css',
                    'js' => 'text/javascript'
                );
                if (array_key_exists($ext, $replace_mime)) {
                    $mime_type = $replace_mime[$ext];
                }
                if (strpos($mime_type, 'text') !== FALSE) {
                    $mime_type .= '; charset=utf-8';
                }
            }

            header("Content-Type: $mime_type");
        }
        $ouput = file_get_contents($path);
    }
    echo $ouput;
}