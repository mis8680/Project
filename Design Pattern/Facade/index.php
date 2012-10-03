<?php

ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

include_once 'AudioController.php';


$audiocont = new AudioController();
$audiocont->pushRadioButton();
$audiocont->pushRadioButton();
$audiocont->pushUpButton();
$audiocont->pushDownButton();
$audiocont->pushPlayButton();


?>