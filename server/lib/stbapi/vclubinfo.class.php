<?php

namespace Stalker\Lib\StbApi;


interface vclubinfo {

    public static function getInfoById($id, $type = NULL);

    public static function getInfoByName($orig_name);

    public static function getRatingByName($orig_name);

    public static function getRatingById($id, $type = NULL);

}