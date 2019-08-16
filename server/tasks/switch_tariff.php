<?php

set_time_limit(0);

include "./common.php";

use Stalker\Lib\Core\Mysql;
use Stalker\Lib\Core\Config;

if (!Config::get('enable_tariff_plans')){
    exit;
}

$need_to_switch = Mysql::getInstance()->from('users')->where(
    array(
        'tariff_expired_date!=' => '',
        'tariff_expired_date != ' => '0000-00-00 00:00:00',
        'tariff_expired_date<=' => date(Mysql::DATETIME_FORMAT)
    )
)->get();

$tariffs = Mysql::getInstance()->from('tariff_plan')->get()->all();
$tariffs_map = array();

foreach ($tariffs as $tariff){
    $tariffs_map[$tariff['id']] = $tariff;
}

$default_tariff = Mysql::getInstance()->from('tariff_plan')->where(array('user_default' => 1))->get()->first();

while ($user = $need_to_switch->next()){

    if (isset($tariffs_map[$user['tariff_id_instead_expired']])){
        $days_to_expires = $tariffs_map[$user['tariff_id_instead_expired']]['days_to_expires'];
    } elseif ($default_tariff){
        $days_to_expires = $default_tariff['days_to_expires'];
    }

    $tariff_plan_id = isset($tariffs_map[$user['tariff_id_instead_expired']]) ? $user['tariff_id_instead_expired'] : 0;

    Mysql::getInstance()->update('users',
        array(
            'tariff_plan_id'            => $tariff_plan_id,
            'tariff_expired_date'       => !isset($days_to_expires) || $days_to_expires == 0 ? null : date(Mysql::DATETIME_FORMAT, time() + $days_to_expires * 24 * 3600),
            'tariff_id_instead_expired' => 0
        ),
        array('id' => $user['id'])
    );

    if ($tariff_plan_id != $user['tariff_plan_id']){
        //send notification
        $event = new SysEvent();
        $event->setUserListById(array(intval($user['id'])));
        $user_o = User::getInstance((int) $user['id']);
        $event->sendMsgAndReboot($user_o->getLocalizedText('Tariff plan is changed, please restart your STB'));
        User::clear();
    }
}