--TEST--
Test array_intersect_key() function : error conditions
--FILE--
<?php
/* Prototype  : array array_intersect_key(array arr1, array arr2 [, array ...])
 * Description: Returns the entries of arr1 that have keys which are present in all the other arguments.
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_intersect_key() : error conditions ***\n";

//Initialise function arguments
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);

// Testing array_intersect_key with one less than the expected number of arguments
echo "\n-- Testing array_intersect_key() function with less than expected no. of arguments --\n";
var_dump( array_intersect_key($array1) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_intersect_key(): 2 required, 1 provided in %s on line %d
 -- compile-error
