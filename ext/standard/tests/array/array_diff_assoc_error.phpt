--TEST--
Test array_diff_assoc() function : error conditions - pass array_diff_assoc() too few/zero arguments
--FILE--
<?php
/* Prototype  : array array_diff_assoc(array $arr1, array $arr2 [, array ...])
 * Description: Returns the entries of arr1 that have values which are not present
 * in any of the others arguments but do additional checks whether the keys are equal
 * Source code: ext/standard/array.c
 */

/*
 * Test errors for array_diff with too few\zero arguments
 */

echo "*** Testing array_diff_assoc() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing array_diff_assoc() function with zero arguments --\n";
var_dump( array_diff_assoc() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_diff_assoc(): 2 required, 0 provided in %s on line %d
 -- compile-error
