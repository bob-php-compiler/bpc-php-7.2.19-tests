--TEST--
Test wrong number of arguments for atan()
--FILE--
<?php
/*
 * proto float atan(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(atan());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function atan(): 1 required, 0 provided in %s on line %d
 -- compile-error
