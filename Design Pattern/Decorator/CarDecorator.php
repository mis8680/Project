<?php

require_once 'Car.php';

/**
  * CarDecorator
  *
  * abstract class, its constructor sets its car reference filed
  */
abstract class CarDecorator implements Car
{
    public $car;
    
    //constructor
    public function __construct(Car $car)
    {
        $this->car = $car;
    }
      
}

?>