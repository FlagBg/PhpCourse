<?php

abstract class ProtectedAccessor
{
	abstract protected function countMoney();
	
	protected $wage;
	
	protected function setHourly($hourly)
	{
		$money = 	$hourly;
		return 		$money;
		
	}
	
}
?>
