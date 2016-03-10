<?php

include_once 'Inheritance.php';

class Dog extends Inheritance
{
	function __construct()
	{
		echo "Dogs " . $this->fourLegs() . "<br/>";
		Echo "Dogs " . $this->makeNoise("Baf,Baf") . "<br/>";
		echo $this-> guardHouse();
	}
	
	private function guardHouse()
	{
		return "Grrrrrr";
	}
	
}
?>

//include
//extends
// constructor: function __construct()
//{ echo "toi" . $this->neshtoHodi()
//Echo $this-> makeNoise()
// echo $this-> novMetod();
//}
//noviyt metod da opraim
//private function novMetod()
//{ return "stringggggggg";}
//gepi.... tva tryabva naizust... 
