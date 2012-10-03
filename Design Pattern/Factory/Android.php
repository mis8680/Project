<?php

require_once 'OS.php';

/**
 * Android
 *
 * Android object with android OS
 */
class Android extends OS {

    //constructor
    public function __construct() {
        print __METHOD__ . '::' . __LINE__ . '<br />';
    }
    //destructor
    public function __destruct() {
        print __METHOD__ . '::' . __LINE__ . '<br />';
    }
    /**
     * product
     *   
     * @access  pulic 
     * @param void
     * @return void,  print out message
     */
    public function product() {
        print 'Samsung GalaxyS3!!!';
    }

}

?>