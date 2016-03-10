<?php

class TextFactory extends FactoryMethod
{
	protected function factoryMethod()
	{
		$product = new TextProduct();
		return( $product-> getProperties());
	}
}

