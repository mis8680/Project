<?php

include_once 'Radio.php';
include_once 'Speaker.php';
include_once 'CDPlayer.php';

/**
 * AudioController
 *
 * key object of facade pattern, and each method hides the interations of other components 
 */
class AudioController {

    private $speaker;
    private $radio;
    private $cd;

    //constructor
    public function __construct() {
        $this->speaker = new Speaker();
        $this->radio = new Radio();
        $this->cd = new CDPlayer();
    }
    
   /**
     * pushUpButton
     *   
     * @access  pulic 
     * @param void
     * @return void,  call method
     */
    public function pushUpButton() {
        $this->speaker->VolumeUp();
    }
    /**
     * pushDownButton
     *   
     * @access  pulic 
     * @param void
     * @return void,  call method
     */
    public function pushDownButton() {
        $this->speaker->VolumeDown();
    }
    
    /**
     * pushPlayButton
     *   
     * @access  pulic 
     * @param void
     * @return void,  call method
     */
    public function pushPlayButton() {
        $this->cd->Play();
    }
    /**
     * pushRadioButton
     *   
     * @access  pulic 
     * @param void
     * @return void,  call method
     */
    public function pushRadioButton() {

        if ($this->radio->_switch === FALSE) {
            $this->radio->turnOn();
        } else {
            $this->radio->turnOff();
        }
    }

}

?>