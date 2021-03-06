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

// Zero arguments
echo "\n-- Testing array_values() function with Zero arguments --\n";
var_dump( array_values() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_values(): 1 required, 0 provided in %s on line %d
 -- compile-error
