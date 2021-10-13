--TEST--
Test array_reverse() function : error conditions
--FILE--
<?php
/* Prototype  : array array_reverse(array $array [, bool $preserve_keys])
 * Description: Return input as a new array with the order of the entries reversed
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_reverse() : error conditions ***\n";

// more than the expected number of arguments
echo "\n-- Testing array_diff() function with more than expected no. of arguments --\n";
$array = array(1, 2, 3, 4, 5, 6);
$extra_arg = 10;
var_dump( array_reverse($array, true, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_reverse(): 2 at most, 3 provided in %s on line %d
 -- compile-error
