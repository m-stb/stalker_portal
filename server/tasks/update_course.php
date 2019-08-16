<?php

error_reporting(E_ALL);

include "./common.php";

use Stalker\Lib\Core\Config;
use Stalker\Lib\Core\Mysql;
use Stalker\Lib\Course\ProviderFactory;
use Stalker\Lib\Course\CourseUpdater;

$handlers = Config::getSafe('exchange_rate_classes', array('Course', 'CourseCbr'));
$providers = Config::get('course_providers_for_update');

foreach ($providers as $name => $currencies) {
    $provider = ProviderFactory::build($name, [
        $currencies,
        Mysql::getInstance()
    ]);

    if ($provider instanceof CourseUpdater) {
        $rez = $provider->updateData();
        //echo sprintf('Currency exchange from %s provider have been updated. %d new records, removed %d records ', $name, $rez['inserted'], $rez['removed']);
    } else {
        error_log(sprintf('Class "%s" must implement CourseUpdater interface', get_class($provider)));
    }

    //echo PHP_EOL;
}
