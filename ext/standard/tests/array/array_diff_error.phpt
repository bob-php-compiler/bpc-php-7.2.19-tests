--TEST--
Test array_diff() function : error conditions - too few arguments passed to function
--FILE--
<?php
/* Prototype  : array array_diff(array $arr1, array $arr2 [, array ...])
 * Description: Returns the entries of $arr1 that have values which are
 * not present in any of the others arguments.
 * Source code: ext/standard/array.c
 */

/*
 * Test array_diff with less than the expected number of arguments
 */

echo "*** Testing array_diff() : error conditions ***\n";
// Zero arguments
echo "\n-- Testing array_diff() function with zero arguments --\n";
var_dump( array_diff() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_diff(): 2 required, 0 provided in %s on line %d
 -- compile-error
