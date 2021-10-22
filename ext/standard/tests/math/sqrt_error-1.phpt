--TEST--
Test wrong number of arguments for sqrt()
--INI--
precision = 14
--FILE--
<?php
/*
 * proto float sqrt(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(sqrt());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function sqrt(): 1 required, 0 provided in %s on line %d
 -- compile-error
