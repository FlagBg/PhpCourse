<?php

class Person extends CloneMe
{
	public function __construct()
	{
		$this->picture="Image.png";
		$this->name ="Original";
	}
	public function display()
	{
		echo "<img src ='$this->picture'>";
		echo "<br /> $this -> name <p />";
	}
	
	function __Clone()
	{
		
	}
}

$worker = new Person();
$worker ->display();

$slacker = clone $worker;
$slacker -> name = "Clooooneeeed";
$slacker -> display();
?>

