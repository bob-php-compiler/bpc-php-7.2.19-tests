--TEST--
Test array_uintersect_assoc() function : error conditions
--FILE--
<?php
/* Prototype  : array array_uintersect_assoc(array arr1, array arr2 [, array ...], callback data_compare_func)
 * Description: U
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

echo "*** Testing array_uintersect_assoc() : error conditions ***\n";

// Testing array_uintersect_assoc with one less than the expected number of arguments
echo "\n-- Testing array_uintersect_assoc() function with less than expected no. of arguments --\n";
$arr1 = array(1, 2);
$arr2 = array(1, 2);
var_dump( array_uintersect_assoc($arr1, $arr2) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_uintersect_assoc(): 3 required, 2 provided in %s on line %d
 -- compile-error
