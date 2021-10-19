--TEST--
Test reset() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : mixed reset(array $array_arg)
 * Description: Set array argument's internal pointer to the first element and return it
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to reset() to test behaviour
 */

echo "*** Testing reset() : error conditions ***\n";

//Test reset with one more than the expected number of arguments
echo "\n-- Testing reset() function with more than expected no. of arguments --\n";
$array_arg = array(1, 2);
$extra_arg = 10;
var_dump( reset($array_arg, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function reset(): 1 at most, 2 provided in %s on line %d
 -- compile-error
