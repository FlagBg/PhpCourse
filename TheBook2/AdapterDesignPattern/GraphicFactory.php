<?php

class GraphicFactory extends FactoryMethod
{
	protected function factoryMethod()
	{
		$product = new GraphicFactory();
		return ($product->getProperties());
	}
	
}
?>
