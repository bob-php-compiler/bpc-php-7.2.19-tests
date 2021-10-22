--TEST--
Test wrong number of arguments for sin()
--FILE--
<?php
/*
 * proto float sin(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(sin());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function sin(): 1 required, 0 provided in %s on line %d
 -- compile-error
