<?php

require_once 'Mobile.php';
require_once 'MobileBuilder.php';

/**
  * AndroidBuilder
  *
  * create Android Mobile
  */
class AndroidBuilder extends MobileBuilder
{
    
    //override method from MobileBuilder
    //each variable gets specific value
    public function buildScreen()
    {
        $this->oMobile->setScreen('5Inch');
    }
    
    public function buildKeypad()
    {
        $this->oMobile->setKeypad('English');
    }
    
    public function buildMemory()
    {
        $this->oMobile->setMemory('4GB');
    }
    
 
    
}

?>