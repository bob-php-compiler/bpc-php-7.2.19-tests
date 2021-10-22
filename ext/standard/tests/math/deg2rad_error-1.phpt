--TEST--
Test wrong number of arguments for deg2rad()
--INI--
precision = 14
--FILE--
<?php
/*
 * proto float deg2rad(float number)
 * Function is implemented in ext/standard/math.c
*/

echo "\nToo few arguments\n";
var_dump(deg2rad());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function deg2rad(): 1 required, 0 provided in %s on line %d
 -- compile-error
