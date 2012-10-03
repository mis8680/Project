<?php

require_once 'Subject.php';

/**
 * Observer
 *
 * observer interface with update method.
 */
interface Observer
{
    public function Update(Subject $subject);
}

?>