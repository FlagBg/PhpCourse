<?php

class asda
{
	public function test()
	{
		$meal = 100;
		$tax = 10;
		$tip = 10;
			
		$result = restaurantCheck($meal, $tax, $tip, true);
		$this ->assertEquals(121, $result);
	}
	
	public function test1()
	{
		$meal = 100;
		$tax = 10;
		$tip = 10;
		
		$result = restaurantCheck($meal, $tax, $tip, false);
		$this-> assertEquals(120, $result);
	}
	
}

/*
class Greetings
{
	public $name;
	public $contains	
	
	$str = 'zdrasti';
	

}

$str = "hello there, i am alright to see you happy and smiling and shining as 
		the sun in this beautiful, beautiful day. Let's continue a little bit more
		to see how this bloody thing works! haha"
		
	
		$newstr = wordwrap($string, 20, "<br />\n");

echo "$newstr\n";|





// $dwarves = 'fatty,sleepy,happy,grumpy,sneezy,bashful,doc';
// $dwarf_array = explode(',', $dwarves,3);


// print_r($dwarf_array);

?>






// $sales = array( array('Northeast','2005-01-01','2005-02-01',12.54),
// 				array('Northwest','2005-01-01','2005-02-01',546.33),
// 				array('Southeast','2005-01-01','2005-02-01',93.26),
// 				array('Southwest','2005-01-01','2005-02-01',945.21),
// 				array('All Regions','--','--',1597.34) );


// foreach ($sales as $sale){
	
// 	print pack('A21234234', $sale[0], $sale[1], $sale[2],$sale[4],$sale[5]) . "\n";
// }






// 	$zipcode - trim($_GET)['zipcide']);
	
			

// 	$s = "Once upon a time there was a story.";
// 	$words = explode(' ', $s);

// 	$words = array_reverse($words);

// 	$s = implode(' ', $words);
// 	print $s;

// 		print_r( strtoupper("asdf asdf fdas fasd"));
		
		
		
// 		print strtolower("asdfadas asdf as as fd ds fa d");
// 		print strtoupper"'|asdfa fasdf aasdf asd f"');
 */	
	
		
		

