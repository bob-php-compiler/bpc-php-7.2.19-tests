--TEST--
Test array_diff_ukey() function : error conditions
--FILE--
<?php
/* Prototype  : array array_diff_ukey(array arr1, array arr2 [, array ...], callback key_comp_func)
 * Description: Returns the entries of arr1 that have keys which are not present in any of the others arguments.
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_diff_ukey() : error conditions ***\n";

// Testing array_diff_ukey with one less than the expected number of arguments
echo "\n-- Testing array_diff_ukey() function with no arguments --\n";
var_dump( array_diff_ukey() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_diff_ukey(): 3 required, 0 provided in %s on line %d
 -- compile-error
