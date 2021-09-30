--TEST--
Test array_diff_key() function : error conditions
--FILE--
<?php
/* Prototype  : array array_diff_key(array arr1, array arr2 [, array ...])
 * Description: Returns the entries of arr1 that have keys which are not present in any of the others arguments.
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_diff_key() : error conditions ***\n";

// Testing array_diff_key with no arguments
echo "\n-- Testing array_diff_key() function with no arguments --\n";
var_dump( array_diff_key() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_diff_key(): 2 required, 0 provided in %s on line %d
 -- compile-error
