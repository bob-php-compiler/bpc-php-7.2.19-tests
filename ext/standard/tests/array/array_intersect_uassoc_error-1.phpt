--TEST--
Test array_intersect_uassoc() function : error conditions
--FILE--
<?php
/* Prototype  : array array_intersect_uassoc(array arr1, array arr2 [, array ...], callback key_compare_func)
 * Description: Computes the intersection of arrays with additional index check, compares indexes by a callback function
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_intersect_uassoc() : error conditions ***\n";

// Initialise function arguments
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");

// Testing array_intersect_uassoc with one less than the expected number of arguments
echo "\n-- Testing array_intersect_uassoc() function with less than expected no. of arguments --\n";
var_dump( array_intersect_uassoc($array1, $array2) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_intersect_uassoc(): 3 required, 2 provided in %s on line %d
 -- compile-error
