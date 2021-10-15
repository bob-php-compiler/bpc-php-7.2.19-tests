--TEST--
Test ksort() function : error conditions
--FILE--
<?php
/* Prototype  : bool ksort(array &array_arg [, int sort_flags])
 * Description: Sort an array by key, maintaining key to data correlation
 * Source code: ext/standard/array.c
*/

/*
* Testing ksort() function with all possible error conditions
*/

echo "*** Testing ksort() : error conditions ***\n";

//Test ksort with more than the expected number of arguments
echo "\n-- Testing ksort() function with more than expected no. of arguments --\n";
$array_arg = array(1 => 1, 2 => 2);
$extra_arg = 10;

var_dump( ksort($temp_array, SORT_STRING, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ksort(): 2 at most, 3 provided in %s on line %d
 -- compile-error
