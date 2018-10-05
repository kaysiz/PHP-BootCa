#!/usr/bin/php
<<<<<<< HEAD
<?= implode(" ",preg_split("/[\s]+/",$argv[1]))."\n";
=======
<?= ($argc > 1) ? implode(" ",preg_split("/[\s]+/",trim($argv[1])))."\n" : "";
>>>>>>> ce684761e721eccf681e081e1053f0eed77386f7
