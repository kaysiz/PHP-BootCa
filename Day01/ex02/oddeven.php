#!/usr/bin/php
<?php
    $i = 1;
    while($i)
    {
        echo "Enter a number: ";
        $number = trim(fgets(fopen ("php://stdin","r")));
        if(is_numeric($number)){
            if ($number % 2 == 0) {
                echo "The number ".$number." is even\n";
            }
            else
                echo "The number ".$number." is odd\n";
        }
        else
            echo "'".$number."' is not a number\n";
    }