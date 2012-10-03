<?php

class Mobile
{
    private $screen;
    private $keypad;
    private $memory;
    
    public function setScreen($screen)
    {
        $this->screen = $screen;
    }
    public function setKeypad($keypad)
    {
        $this->keypad = $keypad;
    }
    public function setMemory($memory)
    {
        $this->memory = $memory;
    }
    
    public function toString()
    {
        
        print 'ScreenSize:' . $this->screen . ', Keypad :' . $this->keypad . ', Memory:' . $this->memory . '<br />';
    }
}

?>
