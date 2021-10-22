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

$arg_0 = 1.0;
$extra_arg = 1;

echo "\nToo many arguments\n";
var_dump(deg2rad($arg_0, $extra_arg));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function deg2rad(): 1 at most, 2 provided in %s on line %d
 -- compile-error
