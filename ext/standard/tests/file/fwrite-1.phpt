--TEST--
fwrite() tests
--FILE--
<?php

$filename = "./fwrite.dat";

$fp = fopen($filename, "w");
var_dump(fwrite($fp));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fwrite(): 2 required, 1 provided in %s on line %d
 -- compile-error
