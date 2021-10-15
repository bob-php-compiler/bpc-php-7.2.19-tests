--TEST--
Test asort() function : error conditions
--FILE--
<?php
/* Prototype  : bool asort(array &array_arg [, int sort_flags])
 * Description: Sort an array
 * Source code: ext/standard/array.c
*/

/*
* Testing asort() function with all possible error conditions
*/

echo "*** Testing asort() : error conditions ***\n";

//Test asort with more than the expected number of arguments
echo "\n-- Testing asort() function with more than expected no. of arguments --\n";
$array_arg = array(1, 2);
$extra_arg = 10;

var_dump( asort($array_arg, SORT_REGULAR, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function asort(): 2 at most, 3 provided in %s on line %d
 -- compile-error
