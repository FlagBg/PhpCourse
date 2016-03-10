<?php

class Derek
{
	protected $name;
	protected $favoriteFood;
	protected $sound;
	protected $id;
	
	public static $numberOfAnimals = 0;
	
	const PI = "3.14159";
	
	function getName()
	{
		return $this->name;
	}
	
	function __construct()
	{
		$this->id=rand( 100, 10000000 );
		echo $this-> id . "Has been assigned";
		
		Derek::$numberOfAnimals++;

		
	}

	public function __destruct()
	{
		echo $this-> name . " is being destroyed ";
	}
	
	function __get( $name )
	{
		echo "Asked for ". $name ;
		return $this-> $name;
	}
	
	function __set( $name, $value)
	{
		switch ( $name )
		{
			case "name" :
			$this -> name = $value;
			break;
			
			case "favoruteFood" : 
			$this -> favoriteFood= $value;
			break;
			
			case "sound" :
			$this -> sound = $value;
			brake;
			
			default :
				echo $name . "Not Found";
		}
		
		echo "Set " . $name . " to " . $value . "<br /";
	}
	
	function run()
	{
		echo $this-> name . " runs <br />";
	}
	
	function __toString()
	{
		
		
	}
	
	
}

class Dog extends Derek
{
	function run()
	{
		echo $this-> name . " runs like crazy <br />";
	}
			
}
$animalOne = new Derek();
$animalOne -> name = " Barry ";
$animalOne -> favoriteFood = "Meat";
$animalOne -> sound = "Ruff";

$animalOne-> run();


echo $animalOne->name . "says " . $animalOne-> sound . " my id is" . $animalOne -> id . "total animals = " . Derek::$numberOfAnimals;

echo "Favorite number " . Derek::PI;






