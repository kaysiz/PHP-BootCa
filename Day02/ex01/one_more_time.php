#!/usr/bin/php
<?php
    $months = array(
        "janvier"=> 1, "février" => 2, "mars" => 3, "avril" => 4, "mai" => 5, "juin" => 6,
        "juillet" => 7, "aout" => 8, "septembre" => 9, "octobre" => 10, "novembre" => 11, "décembre" => 12
    );

    if($argc < 2)
        exit;
    $my_date = preg_split("/[\s]+/", $argv[1]);
    if(sizeof($my_date) < 5)
    {
        echo "Wrong Format\n";
        exit;        
    }
    unset($my_date[0]);
    $month = str_pad($months[strtolower($my_date[2])], 2, "0", STR_PAD_LEFT);
    if($month == 00)
    {
        echo "Wrong Format\n";
        exit;        
    }
    date_default_timezone_set("Europe/Paris");
    echo strtotime($my_date[3]."/".$month."/".$my_date[1].' '.$my_date[4])."\n";
?>