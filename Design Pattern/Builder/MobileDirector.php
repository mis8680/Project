<?php

require_once 'MobileBuilder.php';

class MobileDirector
{
    private $oMobileBuilder;
    
    public function setMobileBuilder(MobileBuilder $oMobileBuilder)
    {
        $this->oMobileBuilder = $oMobileBuilder;
    }
    
    public function constructMobile()
    {
        $this->oMobileBuilder->createNewMobile();
        $this->oMobileBuilder->buildScreen();
        $this->oMobileBuilder->buildKeypad();
        $this->oMobileBuilder->buildMemory();
    }
    
    public function getMobile()
    {
        return $this->oMobileBuilder->getMobile();
    }
    
}

?>