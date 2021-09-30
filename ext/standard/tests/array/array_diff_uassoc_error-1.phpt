--TEST--
Test array_diff_uassoc() function : error conditions
--FILE--
<?php
/* Prototype  : array array_diff_uassoc(array arr1, array arr2 [, array ...], callback key_comp_func)
 * Description: Computes the difference of arrays with additional index check which is performed by a
 * 				user supplied callback function
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_diff_uassoc() : error conditions ***\n";

//Initialize array
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");

// Testing array_diff_uassoc with one less than the expected number of arguments
echo "\n-- Testing array_diff_uassoc() function with less than expected no. of arguments --\n";
var_dump( array_diff_uassoc($array1, $array2) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_diff_uassoc(): 3 required, 2 provided in %s on line %d
 -- compile-error
