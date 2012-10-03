<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

require_once 'Factory.php';
require_once 'Android.php';
require_once 'IOS.php';
require_once 'OS.php';

$mobile = Factory::create('Android');
$mobile->product();

unset($mobile);

$mobile = Factory::create('IOS');
$mobile->product();

?>