<?php

abstract class IAbstract
{
	protected $valueNow;
	/*all implementations must include the following 2 methods:*/
	
	abstract protected function giveCost();
	//must return decimal;
	
	abstract protected function giveCity();
	

	//this function is available to all
	//class implementations withiput overriding;
	
	public function displayShow()
	{
		$stringCost = $this->giveCost();			//must return String
		$stringCost = ( string )$stringCost;
		$allTogether = ("Cost: $ ". $stringCost . " for " . $this -> giveCity());
		return $allTogether;
	}
}
?>
