#!/usr/bin/php
<?php

    $contents = file_get_contents($argv[1]);
    preg_match_all('/title="\s*(.+?)\s*"/',$contents,$final);
    
    foreach($final[1] as $word)
        $contents = str_replace("$word", strtoupper($word),$contents);

    // preg_match_all('/">\s*(.+?)\s*<\/a>/',$contents,$final);
    // //read the entire string
    // $str = file_get_contents(trim($argv[1]));

    // //replace something in the file string - this is a VERY simple example
    // $str = str_replace("html", "HTML",$str);

    // //write the entire string
    // //preg_replace_callback('/title="\s*(.+?)\s*">(.+?)<\/a>/',"capsOn",$contents);
    // foreach($final[1] as $word)
    //     $contents = str_replace("$word", strtoupper($word),$contents);
    // // foreach($final[1] as $word)
    // //     echo strtoupper($word)."\n";
    print_r($contents);