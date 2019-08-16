<?php

set_time_limit(0);

include "./common.php";

use Stalker\Lib\Core\Mysql;
use Stalker\Lib\Core\Config;

if (!Config::get('enable_tariff_plans')){
    exit;
}

$default_tariff = Mysql::getInstance()->from('tariff_plan')->where(array('user_default' => 1))->get()->first();

$tariffs_notifications = Mysql::getInstance()->select('tariffs_notifications.*, messages_templates.header, messages_templates.body, messages_templates.url')->from('tariffs_notifications')
    ->join('messages_templates', 'tariffs_notifications.template_id', 'messages_templates.id', 'INNER')->get()->all();

$tariffs_notifications_map = array();

foreach ($tariffs_notifications as $tariffs_notification){

    if (!isset($tariffs_notifications_map[$tariffs_notification['tariff_id']])){
        $tariffs_notifications_map[$tariffs_notification['tariff_id']] = array();
    }

    $tariffs_notifications_map[$tariffs_notification['tariff_id']][] = $tariffs_notification;
}

$users = Mysql::getInstance()->from('users')->where(array('tariff_expired_date!=' => '', 'tariff_expired_date != ' => '0000-00-00 00:00:00'))->get();

while ($user = $users->next()){

    if ($user['tariff_plan_id'] == 0 && !$default_tariff){
        continue;
    }

    $tariff_plan_id = $user['tariff_plan_id'] == 0 ? $default_tariff['id'] : $user['tariff_plan_id'];

    if (isset($tariffs_notifications_map[$tariff_plan_id])){

        foreach ($tariffs_notifications_map[$tariff_plan_id] as $notification){

            $tariff_expired_time = strtotime($user['tariff_expired_date']);

            if ($tariff_expired_time < time() + $notification['notification_delay_in_hours'] * 3600 && $tariff_expired_time > time() + ($notification['notification_delay_in_hours'] - 1) * 3600){
                $event = new SysEvent();
                $event->setUserListById(array(intval($user['id'])));
                $user_o = User::getInstance((int) $user['id']);
                if ($notification['url']){
                    $event->sendMsgWithUrl($notification['body'], $notification['url'], $notification['header']);
                }else{
                    $event->sendMsg($notification['body'], $notification['header']);
                }
                User::clear();
            }
        }
    }
}