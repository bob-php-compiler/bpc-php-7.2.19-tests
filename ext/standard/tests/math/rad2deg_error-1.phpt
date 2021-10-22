--TEST--
Test wrong number of arguments for rad2deg()
--INI--
precision = 14
--FILE--
<?php
/*
 * proto float rad2deg(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(rad2deg());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function rad2deg(): 1 required, 0 provided in %s on line %d
 -- compile-error
