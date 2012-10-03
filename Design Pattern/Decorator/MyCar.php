<?php

/**
  * MyCar
  *
  * implements Car and concrete component
  */
class MyCar implements Car
{
    /**
      * describe
      *   
      * @access  pulic 
      * @param void
      * @return void (print out the string)
      */
    public function describe()
    {
        print 'This is my car.';
    }
}

?>