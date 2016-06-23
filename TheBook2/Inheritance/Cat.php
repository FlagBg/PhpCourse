<?php
include_once 'Inheritance.php';

class Cat extends Inheritance
{
	function __construct()
	{
		echo "Cats " . $this->fourLegs();
		echo "Cats " . $this->makeNoise("Miauuuu");
		echo "Cats " . $this->layHouse();
	}
	
	private function layHouse()
	{
		return "Lay in the kitchen";
	}
	
}
