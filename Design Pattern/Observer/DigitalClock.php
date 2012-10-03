<?php

require_once 'Observer.php';
require_once 'Subject.php';

/**
 * DigitalClock
 *
 * implement Observer, display a time.
 */
class DigitalClock implements Observer {

    /**
     * Update
     *   
     * @access  pulic 
     * @param subject object
     * @return void,  print out message for updated
     */
    public function Update(Subject $subject) {
        print 'Digital Time is updated!' . $subject->getTime();
    }

}

?>