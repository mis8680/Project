<?php

require_once 'MobileBuilder.php';

/**
  * MobileDirector
  *
  * construct mobile 
  */

class MobileDirector
{
    private $oMobileBuilder;
    
    /**
      * setMobileBuilder
      *   
      * @access  pulic 
      * @param MobileBuilder type 
      * @return void
      */
    public function setMobileBuilder(MobileBuilder $oMobileBuilder)
    {
        $this->oMobileBuilder = $oMobileBuilder;
    }
    
    /**
      * constructMobile
      * - build mobile with each component. 
      *   
      * @access  pulic 
      * @param void
      * @return void
      */
    public function constructMobile()
    {
        $this->oMobileBuilder->createNewMobile();
        $this->oMobileBuilder->buildScreen();
        $this->oMobileBuilder->buildKeypad();
        $this->oMobileBuilder->buildMemory();
    }
    
    /**
      * getMobile
      *   
      * @access  pulic 
      * @param void
      * @return returns getMobile method from parent
      */
    public function getMobile()
    {
        return $this->oMobileBuilder->getMobile();
    }
    
}

?>