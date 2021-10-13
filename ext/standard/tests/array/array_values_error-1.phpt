--TEST--
Test array_values() function : error conditions - Pass incorrect number of functions
--FILE--
<?php
/* Prototype  : array array_values(array $input)
 * Description: Return just the values from the input array
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to array_values to test behaviour
 */

echo "*** Testing array_values() : error conditions ***\n";

//Test array_values with one more than the expected number of arguments
echo "\n-- Testing array_values() function with more than expected no. of arguments --\n";
$input = array(1, 2);
$extra_arg = 10;
var_dump( array_values($input, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_values(): 1 at most, 2 provided in %s on line %d
 -- compile-error
