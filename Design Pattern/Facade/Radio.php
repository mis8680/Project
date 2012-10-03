<?php

/**
 * Radio
 *
 * radio component
 */
class Radio {

    public $_switch = FALSE;

    //constructor
    public function __construct() {
        print __METHOD__ . '::' . __LINE__ . '<br />';
    }

    //destructor
    public function __destruct() {
        print __METHOD__ . '::' . __LINE__ . '<br />';
    }

    /**
     * turnOn
     *   
     * @access  pulic 
     * @param void
     * @return void,  print out message and store true 
     */
    public function turnOn() {
        print 'Radio ON' . '<br />';
        $this->_switch = TRUE;
    }

    /**
     * turnOff
     *   
     * @access  pulic 
     * @param void
     * @return void,  print out message and store false 
     */
    public function turnOff() {
        print 'Radio OFF' . '<br />';
        $this->_switch = FALSE;
    }

}

?>