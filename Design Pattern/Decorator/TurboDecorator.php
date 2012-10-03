<?php

require_once 'CarDecorator.php';

/**
  * TurboDecorator
  *
  * pass a car refernece to cerdecorator, output an additional message
  */
class TurboDecorator extends CarDecorator
{
    //constructor
    public function __construct(Car $car)
    {
        parent::__construct($car);
    }
    
    //override 
    /**
      * describe
      *   
      * @access  pulic 
      * @param void
      * @return void
      */
    public function describe()
    {
        $this->car->describe();
        print 'with Turbo Engine.' . '<br />';
        $this->booster();
    }
    /**
      * booster
      *   
      * @access  pulic 
      * @param void
      * @return void
      */
    public function booster()
    {
        print 'Faster!!!'. '<br />';
    }
    
}

?>