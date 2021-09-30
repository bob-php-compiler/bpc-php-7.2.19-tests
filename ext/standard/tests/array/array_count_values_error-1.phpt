--TEST--
Test array_count_values() function : Invalid parameters
--FILE--
<?php
/* Prototype  : proto array array_count_values(array input)
 * Description: Return the value as key and the frequency of that value in input as value
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

/*
 * Test for handling of incorrect parameters.
 */

echo "*** Testing array_count_values() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing array_count_values() function with Zero arguments --\n";
var_dump( array_count_values() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_count_values(): 1 required, 0 provided in %s on line %d
 -- compile-error
