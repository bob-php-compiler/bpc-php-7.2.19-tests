--TEST--
fopen() with relative path on a file in the script directory
--FILE--
<?php

$file = 'fopen_variation1.php';

$fd = fopen($file, "r");
var_dump($fd);
fclose($fd);

?>
--EXPECTF--
resource(%d) of type (stream)
