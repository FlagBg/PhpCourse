<?php

class PrivateAcc
{
	private $money;
	//suzdavam promenliva ot tipa private
	//construktor setvam stouynost
	public function __construct()
	{
		$this-> money = 200;	
		//echo $this->money;
		$this-> secret();
	}
	
	private function secret()
	{
		echo "sumata pari e: " . $this-> money;
	}

}	

$person = new PrivateAcc();

?>
