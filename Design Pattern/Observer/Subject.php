<?php

require_once 'Observer.php';

/**
 * Subject
 *
 * will declare three methods.
 */
interface Subject
{

    public function registerObserver(Observer $observer);
    
    public function unregisterObserver(Observer $observer);
    
    public function Notify();
}


?>