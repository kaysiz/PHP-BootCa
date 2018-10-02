#!/usr/bin/php
<?= ($argc < 2) ? "" : implode(" ",preg_split("/[\s]+/",trim($argv[1])))."\n";?>