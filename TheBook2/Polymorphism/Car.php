<?php

include_once 'PolyInterface.php';
class Car implements Speed
{
	function slow()
	{
		$carSlow=5;
		return $carSlow;
	}
	
	function cruise()
	{
		$carCruise = 80;
		return $carCruise;
	}
	
	function fast()
	{
		$carFast = 280;
		return $carFast;
	}
	
	function stop()
	{
		$carStopping = "stopping";
		return $carStopping;
	}
}
