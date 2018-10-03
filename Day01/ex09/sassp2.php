#!/usr/bin/php
<?php
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
    sort($specialChar);

    //print the arrays
    ft_putstr($string);
    ft_putstr($num);
    ft_putstr($specialChar);