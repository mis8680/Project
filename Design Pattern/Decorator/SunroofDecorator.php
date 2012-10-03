<?php

require_once 'CarDecorator.php';

class SunroofDecorator extends CarDecorator
{
    public function __construct(Car $car)
    {
        parent::__construct($car);
    }
    
    //override 
    public function describe()
    {
        $this->car->describe();
        print 'with Sunroof.' . '<br />';
        $this->sunroof();
    }
    
    public function sunroof()
    {
        print 'Nice Weather!!!' . '<br />';
    }
    
}

?>