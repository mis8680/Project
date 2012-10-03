<?php

class Speaker
{
        public function __construct()
	{
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}
	
	public function __destruct()
	{
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}
    
	public function VolumeUp()
	{
		print 'VOLUME UP!UP!' . '<br />';
	}
	public function VolumeDown()
	{
		print 'VOLUME DOWN!DOWN!' . '<br />';
	}
	

}

?>