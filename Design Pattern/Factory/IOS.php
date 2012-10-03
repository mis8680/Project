<?php

require_once 'OS.php';

class IOS extends OS {

    public function __construct() {
        print __METHOD__ . '::' . __LINE__ . '<br />';
    }

    public function __destruct() {
        print __METHOD__ . '::' . __LINE__ . '<br />';
    }

    public function product() {
        print 'iPhone5!!!';
    }

}

?>