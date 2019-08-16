<?php

require "../common.php";

use \Stalker\Lib\Core\Mysql;

if (!isset($argv[1]) || $argv[1] == '--help'){
    echo "Usage: php ./cities_to_sql.php [CITIES TXT FILE]\n";
    echo "Text file with all cities you can find here http://www.geonames.org/export/\n";
    exit;
}

$dir = dirname(__FILE__);

$inputFileName = realpath($dir.'/'.$argv[1]);

if (!$inputFileName){
    echo "File $argv[1] not found\n";
    exit;
}

$file = file($inputFileName);

echo "SET NAMES utf8; INSERT INTO all_cities (`id`, `name`, `name_ru`, `country`, `country_id`, `admin1_code`, `admin2_code`, `admin3_code`, `admin4_code`, `lat`, `lon`, `timezone`) VALUES \n";

$countries_map = array();
$countries = Mysql::getInstance()->from('countries')->get()->all();
foreach ($countries as $country){
    $countries_map[$country['iso2']] = $country;
}

$data = array();

foreach ($file as $line) {

    list($geonameid, $name, $asciiname, $alternatenames,
        $latitude, $longitude, $feature_class, $feature_code,
        $country_code, $admin1_code, $admin2_code, $admin3_code, $admin4_code,
        $population, $elevation, $dem, $cgiar, $timezone, $modification_date) = explode("\t", $line);

    $name_ru = Mysql::getInstance()->from('all_cities')->where(array('id' => $geonameid))->get()->first('name_ru');

    $country_id = isset($countries_map[$country_code]) ? $countries_map[$country_code]['id'] : 0;

    if (!$country_id){
        continue;
    }

    $data[] = '("'.$geonameid.'", "'.$name.'", "'.$name_ru.'", "'.$country_code.'", "'.$country_id.'", "'.$admin1_code.'", "'.$admin2_code.'", "'.$admin3_code.'", "'.$admin4_code.'", "'.$latitude.'", "'.$longitude.'", "'.$timezone.'")';
}

echo implode(",\n", $data);