<?php

abstract class FactoryMethod{
	
protected abstract function factoryMethod();

		public function doFactory()
	{
		$mfg= $this -> factoryMethod();
		return $mfg;
	}

}
?>


