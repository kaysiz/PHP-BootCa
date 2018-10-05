#!/usr/bin/php
<?php 
    
    if($argc > 1)
    {
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
    }