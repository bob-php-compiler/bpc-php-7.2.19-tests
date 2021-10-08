--TEST--
Test array_uintersect() function : error conditions
--FILE--
<?php
/* Prototype  : array array_uintersect(array arr1, array arr2 [, array ...], callback data_compare_func)
 * Description: Returns the entries of arr1 that have values which are present in all the other arguments. Data is compared by using an user-supplied callback.
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

echo "*** Testing array_uintersect() : error conditions ***\n";

// Testing array_uintersect with one less than the expected number of arguments
echo "\n-- Testing array_uintersect() function with less than expected no. of arguments --\n";
$arr1 = array(1, 2);
$arr2 = array(1, 2);
var_dump( array_uintersect($arr1, $arr2) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_uintersect(): 3 required, 2 provided in %s on line %d
 -- compile-error
