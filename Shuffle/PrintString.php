<?php 

class StringModification
{
	/*
	 * @var string
	 */
	private $text;
	
	/**
	 * 
	 * @var array
	 */
	private $words;
	
	public function __construct( $text )
	{
		$this->text = $text;
	}
	
	/*
	 * @todo hgjgjhghjhjghjhjhjg
	 */
	public function printText(){
		print $this->text;
	}
	
	public function splitStringBySpace()
	{
		$this->words = explode(' ', $this->text);
		return $this->words;
	}
	
	public function reverseString()
	{
		$words = $this->splitStringBySpace();
		$words = array_reverse($words);
		$this->text = implode(' ', $words);
	}
}

$text = "Once upon a time there was a story.";

$stringModifier = new StringModification( $text );

$stringModifier->printText();
echo "\n";

$words = $stringModifier->splitStringBySpace();
print_r( $words );
echo "\n";

$stringModifier->reverseString();
$stringModifier->printText();
echo "\n";
