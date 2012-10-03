<?php

require_once 'Mobile.php';

/**
  * MobileBuilder
  *
  * used to build a mobile and a method to retrieve the mobile
  */

abstract class MobileBuilder
{
    protected $oMobile;
    
    /**
      * getMobile
      *   
      * @access  pulic 
      * @param void
      * @return returns a class
      */
    public function getMobile()
    {
        return $this->oMobile;
    }
    
    /**
      * createNewMobile
      *   
      * @access  pulic 
      * @param void
      * @return void
      */
    public function createNewMobile()
    {
         $this->oMobile = new Mobile();
    }
    
    //abstract mathods
    public abstract function buildScreen();
    
    public abstract function buildKeypad();
    
    public abstract function buildMemory();
}

?>