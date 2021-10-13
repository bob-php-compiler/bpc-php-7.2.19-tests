--TEST--
Test array_unique() function : error conditions
--FILE--
<?php
/* Prototype  : array array_unique(array $input)
 * Description: Removes duplicate values from array
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_unique() : error conditions ***\n";

//Test array_unique with one more than the expected number of arguments
echo "\n-- Testing array_unique() function with more than expected no. of arguments --\n";
$input = array(1, 2);
$extra_arg = 10;
var_dump( array_unique($input, SORT_NUMERIC, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_unique(): 2 at most, 3 provided in %s on line %d
 -- compile-error
