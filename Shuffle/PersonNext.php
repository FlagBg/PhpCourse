<?php
	
$option = array();
$when = new DateTime();

	for ($i = 0; $i <7; ++$i) {
		$option[$when->getTimestamp()] = $when->format("D, F j, Y");
		$when->modify("+1 day");
		echo "asdf";
	}

	foreach ($option as $value => $label) {
		print "<option value = '$value'>$label</option\n";
		
	}

	

		
		



/* 
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

 */