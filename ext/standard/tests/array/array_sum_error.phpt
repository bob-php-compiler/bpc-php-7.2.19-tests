--TEST--
Test array_sum() function : error conditions
--FILE--
<?php
/* Prototype  : mixed array_sum(array &input)
 * Description: Returns the sum of the array entries
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_sum() : error conditions ***\n";

// Zero arguments
echo "-- Testing array_sum() function with zero arguments --\n";
var_dump( array_sum() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_sum(): 1 required, 0 provided in %s on line %d
 -- compile-error
