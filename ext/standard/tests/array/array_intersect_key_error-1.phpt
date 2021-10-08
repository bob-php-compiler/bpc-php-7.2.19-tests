--TEST--
Test array_intersect_key() function : error conditions
--FILE--
<?php
/* Prototype  : array array_intersect_key(array arr1, array arr2 [, array ...])
 * Description: Returns the entries of arr1 that have keys which are present in all the other arguments.
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_intersect_key() : error conditions ***\n";

// Testing array_intersect_key with one less than the expected number of arguments
echo "\n-- Testing array_intersect_key() function with no arguments --\n";
var_dump( array_intersect_key() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_intersect_key(): 2 required, 0 provided in %s on line %d
 -- compile-error
