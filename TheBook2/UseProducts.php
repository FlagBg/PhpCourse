<?php
//useProducts
include_once 'FruitStore.php';
include_once 'CitrusStore.php';

class UseProducts
{
	public function __construct()
	{
		$appleSauce = new FruitStore();
		$orangeJuice = new FruitStore();
		
		$this->doInterface( $appleSauce );
		$this->doInterface( $orangeJuice);
	}
	
	function doInterface(IProduct $product)
	{
		echo $product ->apples();
		echo $product ->oranges();
		
	}

}
	//suzdavame obekt, kak - s __construct... red, dva obekta, appleSauce i orangeJuice; ot FruitStore(), z/o izvikvam funciite ottam i printim...
	
	//$this-> otivam v IProduct, kydeto sa mi apples(); oranges();
	$worker = new UseProducts();
	
	/*
	
		//IProduct recognizes both of the classes that implemented the IProduct interface.
		//In other words, instead of recognizing one as a FruitStore instance and the other
		//as a CitrusStore instance, it recognizes their common interface IProduct.
	*/
	?>
	
	