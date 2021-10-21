--TEST--
Test wrong number of arguments for asin()
--FILE--
<?php
/*
 * proto float asin(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(asin());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function asin(): 1 required, 0 provided in %s on line %d
 -- compile-error
