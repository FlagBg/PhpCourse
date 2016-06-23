<?php


$fruits = array('Apples', 'Tomatoes', 'Bananas', 'Dates');

print "$fruits\n";

echo "hi";

echo "this are " .$fruits[0] . " , " .$fruits[1] . " , " . $fruits[2] . ".";
echo count($fruits);

$fruits = array_pad($fruits, 10, '');

$lc = array_map('strtolower', $fruits);
print_r($lc);







/*
function checkValidCond($month, $day,$year){
	$minAge = 18;
	$maxAge = 91;
	
	$shortVar		= 10;
	$veryVeryLoname	= 20;
	
	if (! checkdate($month, $day, $year)) {
		echo "check date returns false\n";
		return false;
	}
	
	$now = new DateTime();
	$then_formatted = sprintf("%d-%d-%d", $year, $month, $day);
	$then = DateTime::createFromFormat("Y -n -j|", $then_formatted);
	$age = $now ->diff($then);

	
	if (($age->y <$minAge) || ($age -> y > $maxAge))
	{				
		return false;
	}
	else 
	{
		return true;
	}

}
	if (checkValidCond(9,-9,1987)){
		print "Heeelllllooooooooooowwwwwwwwwwwwwwwwww.";
	} 
		else {
		print "not good";
	}

		
			
			
 
// $date1 = new DateTime("1980-09-26 17:50:21");
// 		new DateTimeZone('America/New_York');
		

// $date2 = new DateTime("2016-02-09 11:17:22");
// 		new DateTimeZone('America/New_York');

// $diff= $date2->diff($date1);

// checkdate(11, 23, 1980);

		
// // printf("The two dates have %d weeks, %s days, " .
// // "%d hours, %d minutes, and %d seconds " .
// // "elapsed between them.",
// // floor($diff->format('%a') / 7),
// // $diff->format('%a') % 7,
// // $diff->format('%h'),
// // $diff->format('%i'),
// // $diff->format('%s'));

			
// 			$diff = $number2->diff($number1) 
// // $printf("The two dates have %d weeks, %s days, " .
// // 		 "%d hours, %d minutes, and %d seconds ").
// // 		 "elapsed between them." ,

		 
		 
		 
// // 		 	floor($diff->format('%a') / 7),
// // 		 	$diff -> format('%a') % 7,
// // 		 	$diff -> format('%h') //hours
// // 		 	$diff -> format('%i'),
// // 		 	$diff -> format('%s'));

// // floor($diff->format('%a') / 7),
// // $diff->format('%a') % 7,
// // $diff->format('%h'),
// // $diff->format('%i'),
// // $diff->format('%s'));
/*
 * 
 */

// // print date('z/M/y') . "\n";
// // $when = new DateTime();
// // print $when -> format ('W/M/Y');
		

// // $now_1 = getdate();
// // $now_2 = localtime();

// // print "{$now_1['hours']}:{$now_1['minutes']}:{$now_1['seconds']}\n";
// // print "$now_2[2]:$now_2[1]:$now_2[0]"


// //$when = new DateTime();
// //print $when ->format('r');

// ;




// // $stamp = mktime(0,0,0,1,1,1960);
// // print date('l', $stamp);
			
