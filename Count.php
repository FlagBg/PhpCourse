<?php

class Count
{
	protected  static $count;
	
	
	public function __construct()
	{
		self::$count++ ;
	}
	
	public function getCount()
	{
		return self::$count;
	}
	
	public static function increment()
	{
		return self::$count++;
	}
	
}