<?php

require_once 'Mobile.php';

abstract class MobileBuilder
{
    protected $oMobile;
    
    public function getMobile()
    {
        return $this->oMobile;
    }
    
    public function createNewMobile()
    {
         $this->oMobile = new Mobile();
    }

    public abstract function buildScreen();
    
    public abstract function buildKeypad();
    
    public abstract function buildMemory();
}

?>