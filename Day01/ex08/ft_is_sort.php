#!/usr/bin/php
<?php

    function ft_is_sort($tab)
    {   
        $temp = $tab;
        $counter = 0;
        $result = true;
        $length = sizeof($tab);
        sort($tab);
        while($counter < $length)
        {
            if($temp[$counter] != $tab[$counter])
                $result = false;
            $counter++;
        }
        return $result;
         
    }