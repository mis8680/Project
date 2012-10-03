<?php 
include_once 'Radio.php';
include_once 'Speaker.php';
include_once 'CDPlayer.php';

class AudioController
{
	private $speaker;
	private $radio;
	private $cd;
	
	public function __construct()
	{
		$this->speaker = new Speaker();
		$this->radio = new Radio();
		$this->cd = new CDPlayer();
	}
	
	public function pushUpButton()
	{
            $this->speaker->VolumeUp();
	}
	
	public function pushDownButton()
	{
            $this->speaker->VolumeDown();
	}
	
	public function pushPlayButton()
	{
            $this->cd->Play();
	}
	
	public function pushRadioButton()
	{
            
		if($this->radio->_switch === FALSE)
		{
                    $this->radio->turnOn();
		}
		else
		{
                    $this->radio->turnOff();
		}
	}


}

?>