<?php

require_once 'Observer.php';
require_once 'Subject.php';

class AnalogClock implements Observer
{
    public function Update(Subject $subject)
    {
        print 'Analog Time is updated!' . $subject->getTime();
    }
}

?>