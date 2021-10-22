--TEST--
Test wrong number of arguments for tan()
--FILE--
<?php
/*
 * proto float tan(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(tan());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function tan(): 1 required, 0 provided in %s on line %d
 -- compile-error
