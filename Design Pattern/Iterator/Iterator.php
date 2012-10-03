<?php

interface Iterator 
{
    public function current();
    public function rewind();
    public function valid();
    public function key();
    public function next();
}

?>