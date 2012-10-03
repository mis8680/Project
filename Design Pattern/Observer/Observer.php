<?php

require_once 'Subject.php';

interface Observer
{
    public function Update(Subject $subject);
}

?>