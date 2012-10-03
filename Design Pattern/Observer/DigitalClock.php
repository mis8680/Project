<?php

require_once 'Observer.php';
require_once 'Subject.php';

class DigitalClock implements Observer
{
    public function Update(Subject $subject)
    {
        print 'Digital Time is updated!' . $subject->getTime();
    }
}

?>