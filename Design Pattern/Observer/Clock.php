<?php

require_once 'Subject.php';
require_once 'DigitalClock.php';
require_once 'AnalogClock.php';

class Clock implements Subject
{
    
    protected $hour;
    protected $min;
    protected $sec;

    private $observer = array();
    
    public function __construct($hour, $min, $sec)
    {
        $this->hour = $hour;
        $this->min = $min;
        $this->sec = $sec;
    }
    
    public function registerObserver(Observer $observer){
        $this->observer[] = $observer;
    }
    
    public function unregisterObserver(Observer $observer){
        foreach($this->observer as $okey => $oval)
        {
            if($oval == $observer)
            {
                unset($this->observer[$okey]);
            }
        }
    }
    
    public function notify(){
        foreach($this->observer as $obs)
        {
            $obs->update($this);
        }
    }
    
    public function updateTime($hour, $min, $sec)
    {
        $this->hour = $hour;
        $this->min = $min;
        $this->sec = $sec;
        $this->notify();
    }
    
    public function getTime()
    {
        return $this->hour . ':' . $this->min . ':' . $this->sec; 
    }
    
    
}

?>