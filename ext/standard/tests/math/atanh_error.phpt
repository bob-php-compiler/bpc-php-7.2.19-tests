--TEST--
Test wrong number of arguments for atanh()
--FILE--
<?php
/*
 * proto float atanh(float number)
 * Function is implemented in ext/standard/math.c
*/

$arg_0 = 1.0;
$extra_arg = 1;

echo "\nToo many arguments\n";
var_dump(atanh($arg_0, $extra_arg));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function atanh(): 1 at most, 2 provided in %s on line %d
 -- compile-error
