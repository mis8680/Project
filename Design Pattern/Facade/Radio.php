<?php 
	
class Radio
{
        public $_switch = FALSE;
	
	public function __construct()
	{
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}
	
	public function __destruct()
	{
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}
	
	public function turnOn()
	{
		print 'Radio ON' . '<br />';
		$this->_switch = TRUE;
	}
	public function turnOff()
	{
		print 'Radio OFF' . '<br />';
		$this->_switch = FALSE;
	}
}


?>