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

//Test array_count_values with one more than the expected number of arguments
echo "\n-- Testing array_count_values() function with more than expected no. of arguments --\n";
$input = array(1, 2);
$extra_arg = 10;
var_dump( array_count_values($input, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_count_values(): 1 at most, 2 provided in %s on line %d
 -- compile-error
