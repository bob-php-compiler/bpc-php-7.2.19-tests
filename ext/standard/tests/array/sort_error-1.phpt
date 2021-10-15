--TEST--
Test sort() function : error conditions
--FILE--
<?php
/* Prototype  : bool sort(array &array_arg [, int sort_flags])
 * Description: Sort an array
 * Source code: ext/standard/array.c
*/

/*
* Testing sort() function with all possible error conditions
*/

echo "*** Testing sort() : error conditions ***\n";

//Test sort with more than the expected number of arguments
echo "\n-- Testing sort() function with more than expected no. of arguments --\n";
$array_arg = array(1, 2);
$extra_arg = 10;

var_dump( sort($array_arg, SORT_REGULAR, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function sort(): 2 at most, 3 provided in %s on line %d
 -- compile-error
