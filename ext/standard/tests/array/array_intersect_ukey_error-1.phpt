--TEST--
Test array_intersect_ukey() function : error conditions
--FILE--
<?php
/* Prototype  : array array_intersect_ukey(array arr1, array arr2 [, array ...], callback key_compare_func)
 * Description: Computes the intersection of arrays using a callback function on the keys for comparison.
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_intersect_ukey() : error conditions ***\n";

//Initialise arguments
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

// Testing array_intersect_ukey with one less than the expected number of arguments
echo "\n-- Testing array_intersect_ukey() function with less than expected no. of arguments --\n";
var_dump( array_intersect_ukey($array1, $array2) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_intersect_ukey(): 3 required, 2 provided in %s on line %d
 -- compile-error
