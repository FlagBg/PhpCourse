<?php



function tab_unexpand($text) {
	$tab_stop = 8;
	$lines = explode("\n",$text);
	foreach ($lines as $i => $line) {
		// Expand any tabs to spaces
		$line = tab_expand($line);
		$chunks = str_split($line, $tab_stop);
		$chunkCount = count($chunks);
		// Scan all but the last chunk
		for ($j = 0; $j < $chunkCount - 1; $j++) {
			$chunks[$j] = preg_replace('/ {2,}$/',"\t",$chunks[$j]);
		}
		// If the last chunk is a tab-stop's worth of spaces
		// convert it to a tab; Otherwise, leave it alone
		if ($chunks[$chunkCount-1] == str_repeat(' ', $tab_stop)) {
			$chunks[$chunkCount-1] = "\t";
		}
		// Recombine the chunks
		$lines[$i] = implode('',$chunks);
	}
	
// 	Recombine the lines
// function tab_expand($text) {
// 	while (strstr($text, "\t")) {
// 		$text = preg_replace_callback('/^([^\t\n]*)(\t+)/m', 
// 									  'tab_expand_helper', $text); 
// 	}
// 	return $text;
// }

// function tab_expand_helper($matches) {
// 	$tab_stop = 8;
	
// 	return $matches[1] . 
// 	str.repeat(' ',strlen($matches[2]) * 
// 					$tab_stop - (strlen($matches[1]) % $tab_stop));
	
// }

// $spaced = tab_expand($obj -> message);






// $rows = $db->query('SELECT message FROM messages WHERE id = 1');
// $obj = $rows->fetch(PDO::FETCH_OBJ);

// $tabbed = str_replace(' ' , "\t" , $obj ->message);
// $spaced = str_replace("\t", ' '  , $obj -> message);

// print "With Tabs: <pre>$tabbed</pre>";
// print "With Spaces: <pre>$spaced</pre";
// it doesn't work!
// function str_rand($length = 32,
// 		$characters = ↵
// 		'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
// 		if (!is_int($length) || $length < 0) {
// 			return false;
// 		}
// 		$characters_length = strlen($characters) - 1;
// 		$string = '';
		
// 		for ($i = $length; $i > 0; $i--) {
// 			$string .= $characters[mt_rand(0, $characters_length)];
// 		}
// 		return $string;
		
// 		print str_rand(16, '.-');

// function str_rand($lenght = 32,
// 		$characters = 'lsafjaghfaelhgadhjldgkjlasfjlajlkjwaeigfuasifuaoifaIORJEFLKJADSF'){
// 	if (!is_int($lenght) || $lenght < 0) {
// 		return false;
// 	}
	
// 		$characters_lenght = strlen($characters) -1;
// 	$string = '';
	
// 	for ($i = $lenght; $i > 0; $i--){
// 	$string.= $characters[mt_rand(0, $characters_lenght)];	
// 	}
// 		return $string;
// 		var_dump($string);
// 		print ($string);
// 	}

// -------------------------------------------------------------------
// 	$s = "Once upon a time there was a story.";
// 	$words = explode(' ', $s);
	
// 	$words = array_reverse($words);
	
// 	$s = implode(' ', $words);
// 	print $s;
// --------------------------------------------------------------------
// 	function hiM($s){
		
// 		$r = '';
// 		$m = $s [0];
// 		$n = 1;

// 		for ($i = 1, $j = strlen($s); $i < $j; $i++){
		
// 			if($s[$i] == $m){
		
// 			$n++;
		
// 		}else {
// 			$r . $n.$m;
// 			$m = $s[$i];
// 			$n = 1;
		
// 		}
		
// 		}
// 			return $r.$n.$m;
// 	}
	
// 	for ($i = 0, $s = 1; $i < 10; $i++) {
// 		$s = hiM($s);
// 		//var_dump( $s );
// 		print "$s\n";
// 	}
// ---------------------------------------------------------------------