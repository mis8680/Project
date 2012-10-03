<?php

require_once 'Mobile.php';
require_once 'MobileBuilder.php';

class AndroidBuilder extends MobileBuilder
{
    
    //override method from MobileBuilder
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