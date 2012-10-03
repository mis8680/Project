<?php

require_once 'Mobile.php';
require_once 'MobileBuilder.php';

class IOSBuilder extends MobileBuilder
{
   
    //override method from MobileBuilder
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