<?php

include "./common.php";

use \Stalker\Lib\Core\Mysql;
use \Stalker\Lib\Core\Middleware;

if (empty($_GET['resolution'])){
    exit;
}

$default_theme = Mysql::getInstance()->from('settings')->get()->first('default_template');

if (!empty($_GET['uid'])){

    $user = User::getInstance((int) $_GET['uid']);

    $default_theme = Mysql::getInstance()->from('settings')->get()->first('default_template');

    $themes = Middleware::getThemes();

    if ($default_theme == 'smart_launcher'){
        foreach ($themes as $theme_name => $theme){
            if (strpos($theme_name, 'smart_launcher') === 0){
                $default_theme = $theme_name;
                break;
            }
        }
    }

    $default_theme = $default_theme == 'smart_launcher' ? 'default' : $default_theme;

    $profile = $user->getProfile();

    if (empty($profile['theme'])){
        $user_theme = $default_theme;
    }elseif (!array_key_exists($profile['theme'], $themes) && $profile['theme'] != 'smart_launcher'){
        $user_theme = $default_theme;
    }elseif ($profile['theme'] == 'smart_launcher'){
        foreach ($themes as $theme_name => $theme){
            if (strpos($theme_name, 'smart_launcher') === 0){
                $user_theme = $theme_name;
            }
        }

        $user_theme = $default_theme;
    }else{
        $user_theme = $profile['theme'];
    }

}else{
    $user_theme = $default_theme;
}

$user_theme = str_replace('smart_launcher:', '', $user_theme);

$theme = new Theme($user_theme);

$theme->setScreenHeight((int) $_GET['resolution']);

header("Location: ".$theme->getCssUrl(), true, 307);