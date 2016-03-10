<?php
include_once 'DoMath.php';

class inheritMath extends DoMath
{
	private $textOut;
	private $fullFace;

	
	public function numToText( $num )
	{
		$this->textOut = ( string ) $num;
		return $this ->   textOut;
	}
	
	public function addFace( $face, $msg )
	{
		$this-> fullFace = "<strong>" . $face . "</strong>: " . $msg;
		return $this-> fullFace;
	}
}
?>
