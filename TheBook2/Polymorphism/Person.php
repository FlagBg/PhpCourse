<?php
include_once 'PolyInterface.php';

class Person implements Speed
{
	function slow()
	{
		return 1;
	}
	
	function cruise()
	{
		return 5;
	}
	
	function fast()
	{
		return 12;
	}
	
	function stop()
	{
		"Stopppping";	
	}
}