<?php


/*


for ($i = 0; $i <22; $i++)
{
	$r = mt_rand(0, 61);
	if($r < 10){
		$c = ord('0') + $r;
	}
	else if ($r<36){
		$c = ord('A') + $r - 10;
	}
	else {
		$c = ord('a') + $r - 36;
	}

	print_r($r);
	//print_r($c);
}



echo date_default_timezone_get();
//echo date_parse($date);



$current_time = urlEncode(date("Y-m-d")."T".date("H:i:s")."Z");

/*
$when = 12431241234;
//$message "it is {0,time,short} on {0,date,medium}.";
$message = "It is {0,time,short} on {0,date,medium}.";

$f = new MessageFormatter('en_US', $message);
print $f->format(array($when));




for($a = 0; $a <= 2; $a++){
	print_r("The number is: $a <br>");

}




for ($i = 0; $i <22; $i++){
	$r = mt_rand(0, 61);
		if($r < 10){
			$c = ord('0') + $r;
		}
		else if ($r<36){
			$c = ord('A') + $r - 10;
		}
		else {
			$c = ord('a') + $r - 36;
		}
		
	print_r($r);	
	print_r($c);
	
	
}





$image = ImageCreateTrueColor(200, 50);

$grey = 0xCCCCCC;

ImageFilledRectangle($image, 0,0,200 - 1, 50 -1, $grey);

$white = 0xFFFFFF;
imageFilledRectangle($image, 50, 10, 150, 40, $white);

header('Content0type: image/png');
ImagePNG( $image, 'myimage.png' );
imagedestroy($image);

$graph = imagecreatefrompng('D:\projects\Shuffle\myimage.png');



$width = 200;
$height = 50;
$image = imagecreatetruecolor($width, $height)

$backgroundColor = 0xFFFFFF; //WHITE

imagefilledrectangle($image, 0, 0, $width - 1, $height - 1, $backgroundColor);




$cars1 = array
	(
		array("Mazda",22,18),
		array("Volvo",15,12),
		array("Nissan",10,8),
		array("BMW",18,12),
		array("Mercedes",14,11)
	);

echo $cars1[0][0].": In stock: ".$cars1[0][1].", sold: ".$cars1[0][2].".<br>";
echo $cars1[1][0].": In stock: " .$cars1[1][1].", sold: " .$cars1[1][2].".<br>";
echo $cars1[2][0].": In stock: ".$cars1[2][1].", sold: ".$cars1[2][2].".<br>";
echo $cars1[3][0].": In stock: ".$cars1[3][1].", sold: ".$cars1[3][2].".<br>";
echo $cars1[4][0].": In stock: ".$cars1[4][1].", sold: ".$cars1[4][2].".<br>";


for ($row = 0; $row <  4; $row++) {
	echo "<p><b>Row number $row</b></p>";
	echo "<ul>";
			for ($col = 0; $col <  3; $col++) {
			echo "<li>".$cars1[$row][$col]."</li>";
			}
			echo "</ul>";
}
 	for($row = 0; $row <5; $row++){
 		echo "Row number $row";
 		for($col=0; $col<3; $col++){
 			echo $cars1[$row][$col];
			


$cars = array("Mazda", "Volvo", "Nissan", "Bmw", "Mercedes");
$arrlenght = count($cars);

for($x = 0; $x < $arrlenght; $x++){
	echo $cars[$x];
	echo "<br>";
}
	




function writeHello(){
	echo "Heeelllllloooooooowwwwwwwwwwww";
}



writeHello();


$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value){
	echo "$value <br>";
}



for($a = 0; $a <= 10; $a++){
	print_r("The number is: $a <br>");
	
}



$key = "AAA";
$test = array($key =>"test1");

for($a = 0; $a<10; $a++){
	$key .= "A";
	$value ="test" . strlen($key);
	$test[key] = $value;
	
}

echo "<pre>";
print_r($test);
echo "</pre>";


 
$juices = array("apple", "orange", "koolaid1" => "purple");

// echo "He drank some $juices[0] juice." .PHP_EOL;
// echo "He drank some $juices[1] juice." .PHP_EOL;
// echo "He drank some $juices[koolaid1] juice." .PHP_EOL;

class people {
	public $john = "John Smith";
	public $jane = "Jane Avrora";
	public $robert = "Robert Sammarsand";

	public $smith = "Smith";

}

$people = new people();

echo "$people-> john drank some $juices[0] juice.".PHP_EOL;
echo "$people-> jane drank some $juices[1] juice." .PHP_EOL;
echo "$people -> jane than said hello to $people->jane.".PHP_EOL;

echo "$people -> robert drank some $juices[2] juice." .PHP_EOL;
echo "$people->robert greeted the two $people->smith"
 */
?>
