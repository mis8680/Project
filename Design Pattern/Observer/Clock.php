<?php

require_once 'Subject.php';
require_once 'DigitalClock.php';
require_once 'AnalogClock.php';

/**
 * Clock
 *
 * implement Subject class,
 * when subject's state changes via the methods, which contacts all the observer with the time via their update() methods.
 */
class Clock implements Subject {

    protected $hour;
    protected $min;
    protected $sec;
    private $observer = array();

    //constructor
    public function __construct($hour, $min, $sec) {
        $this->hour = $hour;
        $this->min = $min;
        $this->sec = $sec;
    }

    /**
     * registerObserver
     *   
     * @access  pulic 
     * @param Observer object
     * @return void,  store the objcet into observer array
     */
    public function registerObserver(Observer $observer) {
        $this->observer[] = $observer;
    }

    /**
     * unregisterObserver
     *   
     * @access  pulic 
     * @param Observer object
     * @return void,  unset the object array
     */
    public function unregisterObserver(Observer $observer) {
        foreach ($this->observer as $okey => $oval) {
            if ($oval == $observer) {
                unset($this->observer[$okey]);
            }
        }
    }

    /**
     * notify
     *   
     * @access  pulic 
     * @param void
     * @return void,  print out updated message 
     */
    public function notify() {
        foreach ($this->observer as $obs) {
            $obs->update($this);
        }
    }

    /**
     * updateTime
     *   
     * @access  pulic 
     * @param integer values
     * @return void,  store the param to each variable
     */
    public function updateTime($hour, $min, $sec) {
        $this->hour = $hour;
        $this->min = $min;
        $this->sec = $sec;
        $this->notify();
    }

    /**
     * getTime
     *   
     * @access  pulic 
     * @param void
     * @return returns current updated time.
     */
    public function getTime() {
        return $this->hour . ':' . $this->min . ':' . $this->sec;
    }

}

?>