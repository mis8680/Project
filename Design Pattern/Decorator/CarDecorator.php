<?php

require_once 'Car.php';

abstract class CarDecorator implements Car
{
    public $car;
    
    public function __construct(Car $car)
    {
        $this->car = $car;
    }
      
}

?>