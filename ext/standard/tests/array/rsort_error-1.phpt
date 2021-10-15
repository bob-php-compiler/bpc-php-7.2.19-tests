--TEST--
Test rsort() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : bool rsort(array &$array_arg [, int $sort_flags])
 * Description: Sort an array in reverse order
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to rsort() to test behaviour
 */

echo "*** Testing rsort() : error conditions ***\n";

//Test rsort() with more than the expected number of arguments
echo "\n-- Testing rsort() function with more than expected no. of arguments --\n";
$array_arg = array(1, 2);
$sort_flags = SORT_REGULAR;
$extra_arg = 10;
var_dump( rsort($array_arg, $sort_flags, $extra_arg) );

// dump the input array to ensure that it wasn't changed
var_dump($array_arg);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function rsort(): 2 at most, 3 provided in %s on line %d
 -- compile-error
