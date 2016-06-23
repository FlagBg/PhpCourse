<?php

//svarzvame s IProduct; implementirame IProduct;
include_once 'IProduct.php';

class FruitStore implements IProduct
{
	public function apples()
	{
		return "FruitStore sez -- We have apples. <br>";
	}
	/*
	 * fakti4eski izliza, che tuk s implementaciyata izpolzvame edna i sushta functiya v dva razli4ni klasa, za edin i sushti obekt; to tova mai e ideyata.
	public function apples()
	{
		return "Fruit 2222222222222222222222222222222222";
	}
	*/
	public function oranges()
	{
		return "FruitStore sez -- We have oranges. <br>";
	}
	
}

