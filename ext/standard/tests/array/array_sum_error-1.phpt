--TEST--
Test array_sum() function : error conditions
--FILE--
<?php
/* Prototype  : mixed array_sum(array &input)
 * Description: Returns the sum of the array entries
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_sum() : error conditions ***\n";

// One more than the expected number of arguments
echo "-- Testing array_sum() function with more than expected no. of arguments --\n";
$input = array(1, 2, 3, 4);
$extra_arg = 10;
var_dump( array_sum($input, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_sum(): 1 at most, 2 provided in %s on line %d
 -- compile-error
