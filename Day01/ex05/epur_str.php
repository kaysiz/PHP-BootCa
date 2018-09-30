#!/usr/bin/php
<?= implode(" ",preg_split("/[\s]+/",trim($argv[1])))."\n";?>