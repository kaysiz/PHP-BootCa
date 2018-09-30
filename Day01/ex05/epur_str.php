#!/usr/bin/php
<?php

    $string = implode(" ",preg_split("/[\s]+/",trim($argv[1])));

    echo $string."\n";
    