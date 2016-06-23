<?php

class Person{
	
	private $data = array();
	
	public function __get($property)
	{
		if (isset($this->__data[$property]))
		{
			return $this->__data[$property];
		}
		else 
		{
			return false;
		}
	}	
}

	$Johnson = new Person;
	$Johnson ->email = 'alabala@yahoo.com';
	print $Johnson ->email;
	
	$Ivanov = new Person;
	$Ivanov ->email = 'zdrastiKakSi@yahoo.com';
	echo $Ivanov ->email;
	
	