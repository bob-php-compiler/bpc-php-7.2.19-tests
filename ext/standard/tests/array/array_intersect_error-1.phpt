--TEST--
Test array_intersect() function : error conditions
--FILE--
<?php
/* Prototype  : array array_intersect(array $arr1, array $arr2 [, array $...])
 * Description: Returns the entries of arr1 that have values which are present in all the other arguments
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_intersect() : error conditions ***\n";

// Testing array_intersect() with one less than the expected number of arguments
echo "\n-- Testing array_intersect() function with less than expected no. of arguments --\n";
$arr1 = array(1, 2);
var_dump( array_intersect($arr1) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_intersect(): 2 required, 1 provided in %s on line %d
 -- compile-error
