<?php

class DoMath
{
	private $sum;
	private $quot;
	
	public function simpleAdd($first, $second)
	{
		$this->sum =$first + $second;
		
		return $this->sum;
	}
	
	public function simpleDivide($dividend, $divisor)
	{
		$this->quot = ($dividend/$divisor);
		return $this->quot;
	}
	
}
?>
