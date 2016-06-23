<?php

//Access to an encapsulated object is through public visibility. To be useful, at least some
//of the methods in a class must be visible, even if it’s only the constructor function. Of
//course, all constructor methods are public.

class PublicAccessor
{
	private $password;
	private function openSesame($someData)
	{
		$this -> password = $someData;
		if ($this -> password == "secret")
		{
			echo "You Logged in <br/>";
		}
		
		else 
		{
			echo "TccccccccccccGreda <br/>";
		}
		
	}
	
	public function unlock($safe)
	{
		$this -> openSesame($safe);
	}
	
}

//vkarvame obekti i string za pass i da vidim kvo stava....
$person = new PublicAccessor();
//vikame metoda i podavame stringa....
$person ->unlock("secret");
$person ->unload("bla");
?>
