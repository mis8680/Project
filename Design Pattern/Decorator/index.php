<?php

ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

require_once 'TurboDecorator.php';
require_once 'SunroofDecorator.php';
require_once 'MyCar.php';

$mycar = new MyCar();
$mycar->describe();

print '<br /><br />';

$mycar = new TurboDecorator($mycar);
$mycar->describe();

print '<br /><br />';

$mycar = new SunroofDecorator($mycar);
$mycar->describe();

?>