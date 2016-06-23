<?php

class Dog extends ObjectCreation
{
	function run()
	{
		echo $this -> name . " runs like crazy!!! ";
	}
	
}

$animalOne = new ObjectCreation();

$animalOne -> name = "Kiara";             //setvame atributite;
$animalOne -> favoriteFood = "Meat";	//setvame atributa;
$animalOne -> sound = "Ruff";			//setvame atributa;

echo $animalOne->name . " says " . $animalOne->sound . " give me some "
	. $animalOne-> favoriteFood . " and ID number is: " . $animalOne->id .
		" total animals = " . ObjectCreation::$numberOfAnimals ;
	// taka e greshno!! $animalOne->$numberOfAnimals;//
	// pravilno e, da vleznem v classa i da 