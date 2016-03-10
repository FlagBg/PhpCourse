<?php

include_once 'NorthRegion.php';
include_once 'SouthRegion.php';
include_once 'IAbstract.php';


class Initilize
{
	public function __construct()
	{
		$north = new NorthRegion();
		$south = new SouthRegion();
		$this -> showInterface($north);
		$this -> showInterface($south);	
		
	}
	
	private function showInterface(IAbstract $region)
	{
		echo $region->displayShow() . "<br/>";
	}
	
}

$worker = new Initilize();
?>
