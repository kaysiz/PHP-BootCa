#!/usr/bin/php
<?= ($argc > 1) ? implode(" ",preg_split("/[\s]+/",trim($argv[1])))."\n" : "";