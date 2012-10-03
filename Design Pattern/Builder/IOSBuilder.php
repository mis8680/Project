<?php

require_once 'Mobile.php';
require_once 'MobileBuilder.php';

/**
  * IOSBuilder
  *
  * create ISO mobile
  */
class IOSBuilder extends MobileBuilder
{
   
    //override method from MobileBuilder
    //each variable gets specific value
    public function buildScreen()
    {
        $this->oMobile->setScreen('4Inch');
    }
    
    public function buildKeypad()
    {
        $this->oMobile->setKeypad('Franch');
    }
    
    public function buildMemory()
    {
        $this->oMobile->setMemry('2GB');
    }
     
}

?>