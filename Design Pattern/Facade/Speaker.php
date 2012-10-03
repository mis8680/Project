<?php
/**
 * Speaker
 *
 * one of components 
 */
class Speaker {
    
    //constructor
    public function __construct() {
        print __METHOD__ . '::' . __LINE__ . '<br />';
    }
    //destructor
    public function __destruct() {
        print __METHOD__ . '::' . __LINE__ . '<br />';
    }
    /**
     * VolumeUp
     *   
     * @access  pulic 
     * @param void
     * @return void,  print out message
     */
    public function VolumeUp() {
        print 'VOLUME UP!UP!' . '<br />';
    }
    
    /**
     * VolumeDown
     *   
     * @access  pulic 
     * @param void
     * @return void,  print out message
     */
    public function VolumeDown() {
        print 'VOLUME DOWN!DOWN!' . '<br />';
    }

}

?>