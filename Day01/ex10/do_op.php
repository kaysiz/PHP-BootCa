#!/usr/bin/php
<?php
    if ($argc != 4)
		echo "Incorrect Parameters\n";
	else
	{
		$num1 = trim($argv[1]);
		$num2 = trim($argv[3]);
		if (trim($argv[2]) == "+")
			$result = $num1 + $num2;
		if (trim($argv[2]) == "*")
			$result = $num1 * $num2;
		if (trim($argv[2]) == "-")
			$result = $num1 - $num2;
		if (trim($argv[2]) == "/")
			$result = $num1 / $num2;
		if (trim($argv[2]) == "%")
			$result = $num1 % $num2;
		echo $result."\n";
	}