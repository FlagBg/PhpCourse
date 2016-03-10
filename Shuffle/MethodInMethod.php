<?php

class Person {

	public $name;
	protected $spouse;
	protected $password;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $name;
	}

	protected function setSpouse(Person $spouse){
		if(!isset($this->spouse))
		{
			$this->spouse = $spouse;
		}
	}

	private function setPassword($password){
		$this->password = $password;
	}

}

ReflectionClass::export('Person');

/* 
class Alabala{
	
	const pis = 23;
	
	public static function number($number, $decimals=2, $decimal = '.' , $thousands = ','){
		return number_format($number, $decimals, $decimal, $thousands);
	}
}

print Alabala::number(211231233.3123123151);

 */


/* 
class Users{
	
	static function find($args){
		
	}
	
	static function callStatic($method,$args){
		if (preg_match('/^findBy(.+)$/', $method, $mathes)){
			
			return static::find(array('field' => $matches[1],
										'value' => $args[0]));
		}
	}
}

$user = User::findById(100);
$user = User::findByEmail('angelike_80@yahoo.com');
 */