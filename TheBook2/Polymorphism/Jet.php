<?php

include_once 'PolyInterface.php';

class Jet implements Speed
{
	function slow()
	{
		return 120;
	}
	
	function cruise()
	{
		return 900;
	}
	
	function fast()
	{
		return 2000;
	}
	
	function stop()
	{
		return "gramna";	
	}
}
