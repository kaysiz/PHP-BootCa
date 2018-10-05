#!/usr/bin/php
<?php
<<<<<<< HEAD
function is_lower($c)
{
	return ('a' <= $c && $c <= 'z');
}
function is_upper($c)
{
	return ('A' <= $c && $c <= 'Z');
}
function is_alpha($c)
{
	return (is_lower($c) || is_upper($c));
}
function is_number($c)
{
	return ('0' <= $c && $c <= '9');
}
function to_upper($c)
{
	return ((is_lower($c)) ? $c - 'a' + 'A' : $c);
}
function to_lower($c)
{
	return ((is_upper($c)) ? $c - 'A' + 'a' : $c);
}
$arr = [];
foreach (array_slice($argv, 1) as $arg)
	$arr = array_merge($arr, explode(" ", $arg));
$arr = array_filter($arr, function ($str) { return $str != ""; });
print_r($arr);
usort($arr, function ($a, $b) {
	$i = 0;
	print($a . "(" . strlen($a) . ") AND " . $b . "(" . strlen($b) . ")" . PHP_EOL);
	while ($i < strlen($a) && $i < strlen($b) && $a[$i] == $b[$i])
	{
		print($a[$i] . " == " . $b[$i] . PHP_EOL);
		$i++;
	}
	if ($i == strlen($a) && $i == strlen($b))
	{
		print("A. 0" . PHP_EOL);
		return (0);
	}
	else if ($i == strlen($a))
	{
		print("B. -1" . PHP_EOL);
		return (-1);
	}
	else if ($i == strlen($b))
	{
		print("C. 1" . PHP_EOL);
		return (1);
	}
	else if (is_alpha($a[$i]) && is_alpha($b[$i]))
	{
		print("D. " . strcasecmp($a[$i], $b[$i]) . PHP_EOL);
		return (strcasecmp($a[$i], $b[$i]));
	}
	else if (is_number($a[$i]) && is_number($b[$i]))
	{
		print("F. " . strcmp($a[$i], $b[$i]) . PHP_EOL);
		return (strcmp($a[$i], $b[$i]));
	}
	else if (is_alpha($a[$i]))
	{
		print("E. -1" . PHP_EOL);
		return (-1);
	}
	else if (is_number($a[$i]))
	{
		print("G. -1" . PHP_EOL);
		return (-1);
	}
	else 
	{
		print("H. " . strcmp($a[$i], $b[$i]) . PHP_EOL);
		return (strcmp($a[$i], $b[$i]));
	}
});
foreach ($arr as $arg)
	print($arg . PHP_EOL);
?>
=======
    function ft_putstr($foo)
    {
        foreach($foo as $bar)
        {
            echo $bar."\n";
        }
    }

    //remove program name at index 0
    unset($argv[0]);

    //copy all arguments as single elements into an array
    $jointstring = preg_split("/[\s]+/",trim(join(" ", $argv)));
 
    $i = 0;

    //create 3 arrays to hold numbers, strings, and special characters
    $string = array();
    $num = array();
    $specialChar = array();

    //loop through the joined array and check for the type of each element and push it to the appropriate array
    while ($i < count($jointstring))
    {
        if (ctype_alpha($jointstring[$i]))
            array_push($string, $jointstring[$i]);
        else if (ctype_digit($jointstring[$i]))
            array_push($num, $jointstring[$i]);
        else
            array_push($specialChar, $jointstring[$i]);
        $i++;
    }

    //sort the arrays
    natcasesort($string);
    rsort($num);
    natcasesort($specialChar);

    //print the arrays
    ft_putstr($string);
    ft_putstr($num);
    ft_putstr($specialChar);
>>>>>>> ce684761e721eccf681e081e1053f0eed77386f7
