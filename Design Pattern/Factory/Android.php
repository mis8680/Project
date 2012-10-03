<?php

require_once 'OS.php';

class Android extends OS
{
    public function __construct() {
        print __METHOD__ . '::' . __LINE__ . '<br />';
    }

    public function __destruct() {
        print __METHOD__ . '::' . __LINE__ . '<br />';
    }
    public function product()
    {
        print 'Samsung GalaxyS3!!!';
    }
}


?>