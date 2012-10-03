<?php

require_once 'Observer.php';
require_once 'Subject.php';

/**
 * AnalogClock
 *
 * implement Observer, display a time.
 */
class AnalogClock implements Observer
{
    /**
     * Update
     *   
     * @access  pulic 
     * @param void
     * @return void,  print out the time
     */
    public function Update(Subject $subject)
    {
        print 'Analog Time is updated!' . $subject->getTime();
    }
}

?>