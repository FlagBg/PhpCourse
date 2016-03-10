<?php

include_once 'ProtectedAccessor.php';

class BaseProtectedAccessor extends ProtectedAccessor
{
	function __construct()
	{
		$this->countMoney();
	}
	
	protected function countMoney()
	{
		$this->wage = "Your hourly wage is % ";
		echo $this -> wage . $this-> setHourly(7);
		
	}
}

$person = new BaseProtectedAccessor();
?>
