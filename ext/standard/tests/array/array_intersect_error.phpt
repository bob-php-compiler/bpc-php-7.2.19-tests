--TEST--
Test array_intersect() function : error conditions
--FILE--
<?php
/* Prototype  : array array_intersect(array $arr1, array $arr2 [, array $...])
 * Description: Returns the entries of arr1 that have values which are present in all the other arguments
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_intersect() : error conditions ***\n";

// Testing array_intersect() with zero arguments
echo "\n-- Testing array_intersect() function with Zero arguments --\n";
var_dump( array_intersect() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_intersect(): 2 required, 0 provided in %s on line %d
 -- compile-error
