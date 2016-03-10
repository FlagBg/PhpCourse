<?php
include_once 'IAbstract.php';

class NorthRegion extends IAbstract
{
	//must return decimal value
	protected function giveCost()
	{
		return 210.54;
	}
	//must return string value
	protected function giveCity()
	{
		return "Tokmondu";
	}	
}
?>
