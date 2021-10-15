--TEST--
Test arsort() function : error conditions
--FILE--
<?php
/* Prototype  : bool arsort(array &array_arg [, int sort_flags])
 * Description: Sort an array
 * Source code: ext/standard/array.c
*/

/*
* Testing arsort() function with all possible error conditions
*/

echo "*** Testing arsort() : error conditions ***\n";

//Test arsort with more than the expected number of arguments
echo "\n-- Testing arsort() function with more than expected no. of arguments --\n";
$array_arg = array(1, 2);
$extra_arg = 10;

var_dump( arsort($array_arg, SORT_REGULAR, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function arsort(): 2 at most, 3 provided in %s on line %d
 -- compile-error
