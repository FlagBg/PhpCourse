<?php

class Entree 
{
	public $name;
	public $ingredients = array();
		
	public function hasIngredient($ingredient)
	{
		return in_array($ingredient, $this->ingredients);
	}
	
}
//pravim obect Soup ot class Entree s propertita name i sustavki!
	$soup = new Entree;
	$soup->name = 'Chicken soup';
	$soup->ingredients = array('chicken', 'water');
	
//sandvich, new object from different instances of Entree class. '->' that is my road to the properties(variable) and methods(functions) inside the object!
	$sandwich = new Entree;
	$sandwich->name = 'Chicken sandwich';
	$sandwich->ingredients =array('chicken', 'bread');
	
	
	//assign $ing as string of "chicken, ...,....,water"
	foreach(['chicken', 'lemon', 'bread','water'] as $ing)
	{
		if ($soup->hasIngredient($ing))
		{
			print "Soup contains $ing.\n";
		}
		if ($sandwich->hasIngredient($ing))
		{
			print "Sandwich contains $ing.\n";
		}
	}
	
	
	
	
	
	




/* $arr = array(7, 3, 9, 6, 5, 1, 2, 0, 8, 4,234,23,123,12,12,12);
 $sortedArr = bubbleSort($arr);
var_dump($sortedArr);


function bubbleSort(array $a) {
$n = count($a) - 1;
do {
$swapped = false;
for ($i = 0; $i < $n; ++$i) {
if ($a[$i] > $a[$i + 1]) {
$t = $a[$i];

$a[$i] = $a[$i + 1];
$a[$i + 1] = $t;

$swapped = true;
}
}
} while ($swapped);

return $a;
}

*/