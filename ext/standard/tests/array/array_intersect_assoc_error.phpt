--TEST--
Test array_intersect_assoc() function : error conditions(Bug#43197)
--FILE--
<?php
/* Prototype  : array array_intersect_assoc(array $arr1, array $arr2 [, array $...])
 * Description: Returns the entries of arr1 that have values which are present in all the other arguments.
 * Keys are used to do more restrictive check
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_intersect_assoc() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing array_intersect_assoc() function with Zero arguments --\n";
var_dump( array_intersect_assoc() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_intersect_assoc(): 2 required, 0 provided in %s on line %d
 -- compile-error
