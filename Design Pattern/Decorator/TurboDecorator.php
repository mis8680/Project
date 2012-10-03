<?php

require_once 'CarDecorator.php';

class TurboDecorator extends CarDecorator
{
    public function __construct(Car $car)
    {
        parent::__construct($car);
    }
    
    //override 
    public function describe()
    {
        $this->car->describe();
        print 'with Turbo Engine.' . '<br />';
        $this->booster();
    }
    
    public function booster()
    {
        print 'Faster!!!'. '<br />';
    }
    
}

?>