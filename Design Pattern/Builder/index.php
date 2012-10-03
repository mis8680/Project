<?php

ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

require_once 'AndroidBuilder.php';
require_once 'IOSBuilder.php';
require_once 'MobileDirector.php';
require_once 'Mobile.php';
require_once 'MobileBuilder.php';

$mobileDirector = new MobileDirector();
$androidBuilder = new AndroidBuilder();
//$iosBuilder = new IOSBuilder();

$mobileDirector->setMobileBuilder($androidBuilder);
$mobileDirector->constructMobile();

$mobile = $mobileDirector->getMobile();
$mobile->toString();


?>