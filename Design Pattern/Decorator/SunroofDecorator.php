<?php

require_once 'CarDecorator.php';

/**
  * SunroofDecorator
  *
  * pass a car refernece to cerdecorator, output an additional message
  */
class SunroofDecorator extends CarDecorator
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
        print 'with Sunroof.' . '<br />';
        $this->sunroof();
    }
    
    /**
      * sunroof
      *   
      * @access  pulic 
      * @param void
      * @return void
      */
    public function sunroof()
    {
        print 'Nice Weather!!!' . '<br />';
    }
    
}

?>