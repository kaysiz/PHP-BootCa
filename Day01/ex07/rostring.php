#!/usr/bin/php
<?php 
    $counter = 1;
    $words = str_word_count($argv[1]);
    if($words == 1)
        echo $argv[1];
    elseif($words > 1)
    {
        $string = "";
        $string = preg_split("/[\s]+/",trim($argv[1]));
        while($counter < $words) {
            echo $string[$counter]."\n";
            $counter++;
        }
        echo $string[0]."\n";
    }