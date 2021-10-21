--TEST--
Test wrong number of arguments for acos()
--FILE--
<?php
/*
 * proto float acos(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(acos());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function acos(): 1 required, 0 provided in %s on line %d
 -- compile-error
