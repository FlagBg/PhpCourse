<?php
include_once 'Dog.php';
include_once 'Cat.php';

class Client
{
	function __construct()
	{
		$dog = new Dog();		
		$dog = new Cat();
	}
}

$person = new Client();
