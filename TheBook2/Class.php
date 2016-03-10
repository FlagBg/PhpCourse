<?php

interface Movable
{
	public function move();
}

class Person implements Movable
{
	public function move()
	{
		echo "I am Person and my speed is 5km/h";
	}
	
	public function eat()
	{
		
	}
}

class Car implements Movable
{
	public function move()
	{
		echo "I am a Car and my speed is 100km/h";
	}
	
	public function service()
	{
		
	}
}

class Dog implements Movable
{
	public function move()
	{	
		echo "I am a Dog and my speed is 3km/h an hour";
	}
	
	public function bite()
	{
		
	}
}


class Stopping
{
	public function park( Movable $movable )
	{
		$movable->move();
	}
}



$stopping = new Stopping();
$car	= new Car();
$dog	= new Dog();
$person = new Person();

$stopping->park( $car );
$stopping->park( $dog );
$stopping->park( $person);


// class Me{
	
// 	protected $name;
// 	protected $email;
	
// 	public function setName($name){
// 		$this->name = $name;
// 	}
	
// 	public function setEmail($email){
// 		$this->email =$email;
// 	}
	
// 	public function __toString(){
// 		return "$this->name<$this->email>";
// 	}	
// }



/*  class GuestBook{
	public $comments;
	public $lastVisitor;
	

	function update($comment, $visitor){
		if (!empty($comment))	{
			array_unshift($comments, $comment);
			$this->lastVisitor = $visitor;
		}
	}
}
		$gb = new GuestBook;
		public $lastVisitor = 'Debbora';
	 */