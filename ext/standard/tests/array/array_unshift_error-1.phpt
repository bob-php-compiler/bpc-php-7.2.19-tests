--TEST--
Test array_unshift() function : error conditions
--FILE--
<?php
/* Prototype  : int array_unshift(array $array, mixed $var [, mixed ...])
 * Description: Pushes elements onto the beginning of the array
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_unshift() : error conditions ***\n";

// Testing array_unshift with one less than the expected number of arguments
echo "\n-- Testing array_unshift() function with less than expected no. of arguments --\n";
$array = array(1, 2);
var_dump( array_unshift($array) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_unshift(): 2 required, 1 provided in %s on line %d
 -- compile-error
