<?php

require_once 'Observer.php';


interface Subject
{

    public function registerObserver(Observer $observer);
    
    public function unregisterObserver(Observer $observer);
    
    public function Notify();
}


?>