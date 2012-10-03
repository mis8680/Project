<?php

/**
 * CDPlayer
 *
 * cdplayer component
 */
class CDPlayer {
    //constructor
    public function __construct() {
        print __METHOD__ . '::' . __LINE__ . '<br />';
    }
    //destructor
    public function __destruct() {
        print __METHOD__ . '::' . __LINE__ . '<br />';
    }

    /**
     * Play
     *   
     * @access  pulic 
     * @param void
     * @return void,  print out message
     */
    public function Play() {
        print 'CD PLAY' . '<br />';
    }
     /**
     * Stop
     *   
     * @access  pulic 
     * @param void
     * @return void,  print out message
     */
    public function Stop() {
        print 'CD STOP' . '<br />';
    }
    /**
     * Eject
     *   
     * @access  pulic 
     * @param void
     * @return void,  print out message
     */
    public function Eject() {
        print 'CD EJECT' . '<br />';
    }

}

?>