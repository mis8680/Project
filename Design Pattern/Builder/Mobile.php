<?php

/**
  * Mobile
  *
  * represent mobile
  */
class Mobile
{
    private $screen;
    private $keypad;
    private $memory;
    
    /**
      * setScreen
      *   
      * @access  pulic 
      * @param $screen value
      * @return void
      */
    public function setScreen($screen)
    {
        $this->screen = $screen;
    }
     /**
      * setKeypad
      *   
      * @access  pulic 
      * @param $keypad value
      * @return void
      */
    public function setKeypad($keypad)
    {
        $this->keypad = $keypad;
    }
     /**
      * setMemory
      *   
      * @access  pulic 
      * @param $memory value
      * @return void
      */
    public function setMemory($memory)
    {
        $this->memory = $memory;
    }
     /**
      * toString
      *   
      * @access  pulic 
      * @param none
      * @return print out a specification of the mobile
      */
    public function toString()
    {
        
        print 'ScreenSize:' . $this->screen . ', Keypad :' . $this->keypad . ', Memory:' . $this->memory . '<br />';
    }
}

?>
