<?php




//print date('r');

$t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t));
?>

//doesn't work!
// function sphere_distance($lat1, $lon1, $lat2, $lon2, $radius = 6378.135) {
// 	$rad = doubleval(M_PI/180.0);
// 	$lat1 = doubleval($lat1) * $rad;
// 	$lon1 = doubleval($lon1) * $rad;
// 	$lat2 = doubleval($lat2) * $rad;
// 	$lon2 = doubleval($lon2) * $rad;
// 	$theta = $lon2 - $lon1;
// 	$dist = acos(sin($lat1) * sin($lat2) +
// 			cos($lat1) * cos($lat2) *
// 			cos($theta));
// 	if ($dist < 0) { $dist += M_PI; }
// 	// Default is Earth equatorial radius in kilometers
// 	return $dist = $dist * $radius;
// }
// // NY, NY (10040)
// $lat1 = 40.858704;
// $lon1 = -73.928532;
// // SF, CA (94144)
// $lat2 = 37.758434;
// $lon2 = -122.435126;
// $dist = sphere_distance($lat1, $lon1, $lat2, $lon2);

// It's about 2570 miles from NYC to SF
// $formatted is 2570.18
//$formatted = sprintf("", $dist * 0.621); // Format and convert to miles
//-------

// function sphere_distance($lat1, $lon1, $lat2, $lon2, $radius = 6378.135){
	
// 	$rad = doubleval($lat1) * $rad;
	
// 	$lat1 = doubleval($lat1) * $rad;
// 	$lon1 = doubleval($lon1) * $rad;
// 	$lat2 = doubleval($lat2) * $rad;
// 	$lon2 = doubleval($lon2) * $rad;
	
// 	$theta = $lon2 - $lon1;
// 	$dist = acos(sin($lat1) * sin($lat2) + 
// 				cos($lat1) * cos($lat2) *
// 				cos($theta));
// 		if ($dist <0) {
// 			$dist + M_PI; }
		
// 		return $dist = $dist * $radius;
		
	
// 	// NY, NY (10040)
// 	$lat1 = 40.858704;
// 	$lon1 = -73.928532;
// 	// SF, CA (94144)
// 	$lat2 = 37.758434;
// 	$lon2 = -122.435126;
	
// 	$dist = sphere_distance($lat1, $lon1, $lat2, $lon2);
	
	
// 	$formatted = sprintf("%.2f", $dist * 0.621);
// }


// $number = 1234.34;

// // US uses ˆ , and . for Euro
// // $formatted is ˆ1,234.56
// $usa = new NumberFormatter("en-US", NumberFormatter::CURRENCY);
// $formatted = $usa->formatCurrency($number, 'EUR');

// $formatter = new NumberFormatter('en_GB',  NumberFormatter::CURRENCY);
// echo 'UK: ', $formatter->formatCurrency($amount, 'EUR'), PHP_EOL;

// $formatter = new NumberFormatter('de_DE',  NumberFormatter::CURRENCY);
// echo 'DE: ', $formatter->formatCurrency($amount, 'EUR'), PHP_EOL;



// $formatted1 = number_format($number);
// $formatted2 = number_format($number, 2);
// $formatted3 = number_format($number, 3, ",", ".");
// formatted1 = $usa->format($number);
// // $formatted2 is 1 234,56
// // Note that it's a "non breaking space (\u00A0) between the 1 and the 2
// $france = new NumberFormatter("fr-FR", NumberFormatter::DEFAULT_STYLE);
// $formatted2 = $france->format($number);




// $usa = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
// $formatted1 = $usa>format($number);

// // $france = new NumberFormatter("fr-FR", NumberFormatter::CURRENCY);
// // $formatted2 = $france->format($number);






// function pick_me(){
// 	$colors = array('red','orange','yellow','blue','green','indigo','violet');
// 	$i = mt_rand(0, count($colors) - 1);
// 	return $colors[$i];
// }

// 	mt_srand(234);
// 	$first = pick_me();
// 	$second = pick_me();
	
// 	print "$first is red and $second is yellow.";
	




// $start = 3;
// $end = 7;
// for($i = $start; $i <= $end; $i++){
// 	printf("%d squared is %d\n", $i, $i * $i);
	
// }

// print_r(range(a, d));
// print_r(range(1,8));

//wrapping

// $text = "hello there, i am alright to see you happy and smiling and shining as 
// 		the sun in this beautiful, beautiful day. Let's continue a little bit more
// 		to see how this bloody thing works! haha";
// $newtext = wordwrap($text, 40, "\n", true);

// echo "$newtext\n";
// 

