<?php

class EuroCalc
//using adapter;
{
	private 	$euro;
	private 	$product;
	private 	$service;
	private 	$rate = 1;	
	
	public function requestCalc( $productNow, $serviceNow )
	{
		$this-> product = $productNow;
		$this-> service = $serviceNow;
		$this-> euro  = $this -> product + $this->$service;
		return $this -> requestTotal();	
	}
	
	public function requestTotal()
	{
		$this->euro *= $this->rate;
		return $this->euro;
	}
}
?>