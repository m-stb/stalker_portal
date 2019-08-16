<?php

require_once "../../server/common.php";

use Stalker\Lib\RESTAPI\v3\RESTApiManager;
use Stalker\Lib\OAuth\AuthAccessHandler;

$server = new RESTApiManager(new AuthAccessHandler());
$server->handleRequest();