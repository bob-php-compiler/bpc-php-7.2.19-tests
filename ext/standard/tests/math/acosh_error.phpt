--TEST--
Test wrong number of arguments for acosh()
--FILE--
<?php
/*
 * proto float acosh(float number)
 * Function is implemented in ext/standard/math.c
*/

$arg_0 = 1.0;
$extra_arg = 1;

echo "\nToo many arguments\n";
var_dump(acosh($arg_0, $extra_arg));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function acosh(): 1 at most, 2 provided in %s on line %d
 -- compile-error
