<?php

/**
 * @brief
 * @author FlagBg
 *
 */
class Book extends Product
{
	protected $isbn;
	
	public function __construct( $type, $price, $isbn )
	{
		parent::__construct( $type, $price );
		$this->isbn = $isbn;
	}
	
	public function getProductIsbn()
	{
		return $this->isbn;
	}
	
}