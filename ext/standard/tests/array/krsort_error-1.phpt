--TEST--
Test krsort() function : error conditions
--FILE--
<?php
/* Prototype  : bool krsort(array &array_arg [, int asort_flags])
 * Description: Sort an array
 * Source code: ext/standard/array.c
*/

/*
* Testing krsort() function with all possible error conditions
*/

echo "*** Testing krsort() : error conditions ***\n";

//Test krsort with more than the expected number of arguments
echo "\n-- Testing krsort() function with more than expected no. of arguments --\n";
$array_arg = array(1 => 1, 2 => 2);
$extra_arg = 10;

var_dump( krsort($temp_array, SORT_NUMERIC, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function krsort(): 2 at most, 3 provided in %s on line %d
 -- compile-error
