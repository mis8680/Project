<?php

class CDPlayer 
{
         public function __construct()
	{
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}
	
	public function __destruct()
	{
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}
	public function Play()
	{
		print 'CD PLAY' . '<br />';
	}
	public function Stop()
	{
		print 'CD STOP' . '<br />';
	}
	public function Eject()
	{
		print 'CD EJECT' . '<br />';
	}
}

?>