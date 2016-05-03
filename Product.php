<?php

//define('VAT', 0.20 );
class Product
{
	const VAT = 0.20;
	protected $type;
	protected $price;
	
	
	
	public function __construct( $type, $price )
	{
		$this->type = $type;
		$this->price = $price;
	}
	
	final public function calculateProductVAT()
	{
		return $this->price * self::VAT ;
	}
	
	public function getProductType()
	{
		return $this->type;
	}
	
	public function getProductPrice()
	{
		return $this->price;
	}
	
}