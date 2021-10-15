--TEST--
Test usort() function : error conditions - Pass incorrect number of arguments
--FILE--
<?php
/* Prototype  : bool usort(array $array_arg, string $cmp_function)
 * Description: Sort an array by values using a user-defined comparison function
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to usort() to test behaviour
 */

echo "*** Testing usort() : error conditions ***\n";

// Testing usort with one less than the expected number of arguments
echo "\n-- Testing usort() function with less than expected no. of arguments --\n";
$array_arg = array(1, 2);
var_dump( usort($array_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function usort(): 2 required, 1 provided in %s on line %d
 -- compile-error
