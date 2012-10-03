<?php

ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

require_once 'Clock.php';
require_once 'Subject.php';
require_once 'DigitalClock.php';
require_once 'AnalogClock.php';

$clock = new Clock(10, 30, 24);
$digital = new DigitalClock();
$clock->registerObserver($digital);

$clock->updateTime(10, 32, 30);

$clock->updateTime(10, 33, 20);

$clock->unregisterObserver($digital);

print '<br /><br />';

$analog = new AnalogClock();
$clock->registerObserver($analog);

$clock->updateTime(10, 32, 30);

$clock->updateTime(10, 33, 20);

?>