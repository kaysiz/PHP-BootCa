#!/usr/bin/php
<?php 
    
    $counter = 1;
    $string = "";
    while($counter < $argc)
    {
        $string = $string." ".$argv[$counter];
        $counter++;
    }
    $string = preg_split("/[\s]+/",trim($string));
    sort($string);
    foreach ($string as $word) {
        echo $word."\n";
    }