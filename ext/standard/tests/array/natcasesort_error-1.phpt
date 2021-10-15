--TEST--
Test natcasesort() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : bool natcasesort(array &$array_arg)
 * Description: Sort an array using case-insensitive natural sort
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to natcasesort() to test behaviour
 */

echo "*** Testing natcasesort() : error conditions ***\n";

// Test natcasesort with one more than the expected number of arguments
echo "\n-- Testing natcasesort() function with more than expected no. of arguments --\n";
$array_arg = array(1, 2);
$extra_arg = 10;
var_dump( natcasesort($array_arg, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function natcasesort(): 1 at most, 2 provided in %s on line %d
 -- compile-error
