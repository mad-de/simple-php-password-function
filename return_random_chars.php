<?php

function return_random_chars($length)
{
	$code = "";
	$chars = array(1 => "a", 2 => "b", 3 => "c", 4 => "d", 5 => "e", 6 => "f", 7 => "g", 8 => "h", 9 => "i", 10 => "j", 11 => "k",
	12 => "l", 13 => "m", 14 => "n", 15 => "o", 16 => "p", 17 => "q", 18 => "r", 19 => "s", 20 => "t", 21 => "u", 22 => "v", 23 => "w",
	24 => "x", 25 => "y", 26 => "z", 27 => "A", 28 => "B", 29 => "C", 30 => "D", 31 => "E", 32 => "F", 33 => "G", 34 => "H", 35 => "I",
	36 => "J", 37 => "K", 38 => "L", 39 => "M", 40 => "N", 41 => "O", 42 => "P", 43 => "Q", 44 => "R", 45 => "S", 46 => "T", 47 => "U", 
	48 => "V", 49 => "W", 50 => "X", 51 => "Y", 52 => "Z", 53 => "~", 54 => "!", 55 => "@", 56 => "#", 57 => "$", 58 => "%", 59 => "^", 
	60 => "&", 61 => "*", 62 => "(", 63 => ")", 64 => "_", 65 => "-", 65 => "=", 66 => "+", 67 => "{", 68 => "[", 69 => "}", 70 => "]", 
	71 => ":", 72 => ";", 73 => ",", 74 => "<", 75 => ">", 76 => "?", 77 => ".");	
	$count = 0;
	while ($count < $length)
	{
		$int = random_int(1, 77);
		$code .= $chars[$int];
		$count++;
	}		
	return $code; 
}

// test below

$chars_copy = array(1 => "a", 2 => "b", 3 => "c", 4 => "d", 5 => "e", 6 => "f", 7 => "g", 8 => "h", 9 => "i", 10 => "j", 11 => "k",
	12 => "l", 13 => "m", 14 => "n", 15 => "o", 16 => "p", 17 => "q", 18 => "r", 19 => "s", 20 => "t", 21 => "u", 22 => "v", 23 => "w",
	24 => "x", 25 => "y", 26 => "z", 27 => "A", 28 => "B", 29 => "C", 30 => "D", 31 => "E", 32 => "F", 33 => "G", 34 => "H", 35 => "I",
	36 => "J", 37 => "K", 38 => "L", 39 => "M", 40 => "N", 41 => "O", 42 => "P", 43 => "Q", 44 => "R", 45 => "S", 46 => "T", 47 => "U", 
	48 => "V", 49 => "W", 50 => "X", 51 => "Y", 52 => "Z", 53 => "~", 54 => "!", 55 => "@", 56 => "#", 57 => "$", 58 => "%", 59 => "^", 
	60 => "&", 61 => "*", 62 => "(", 63 => ")", 64 => "_", 65 => "-", 65 => "=", 66 => "+", 67 => "{", 68 => "[", 69 => "}", 70 => "]", 
	71 => ":", 72 => ";", 73 => ",", 74 => "<", 75 => ">", 76 => "?", 77 => ".");
$random_string = return_random_chars(1000000);
$statistic_array = array();
print "<table>";
foreach($chars_copy as $int => $char)
{
	$count_char = substr_count($random_string, $char);
	print "<tr><td>" . $int . ".</td><td>" . $char . "</td><td>" . $count_char . "</td></tr>";
	$statistic_array[$char] = $count_char;
}
print "</table>" .
	  'lowest value in array: ' . array_search(min($statistic_array), $statistic_array) . ' (' . min($statistic_array) . ')<br />' .
      'hightest value in array: ' . array_search(max($statistic_array), $statistic_array) . ' (' . max($statistic_array) . ')<br /><br />' .
	  "String: " . $random_string;
?>
