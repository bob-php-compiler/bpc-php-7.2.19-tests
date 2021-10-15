--TEST--
Test count() function : error conditions - pass incorrect number of args
--FILE--
<?php
/* Prototype  : int count(mixed var [, int mode])
 * Description: Count the number of elements in a variable (usually an array)
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to count() to test behaviour
 */

echo "*** Testing count() : error conditions ***\n";

//Test count with one more than the expected number of arguments
echo "\n-- Testing count() function with more than expected no. of arguments --\n";
$var = 1;
$mode = 10;
$extra_arg = 10;
var_dump( count($var, $mode, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function count(): 2 at most, 3 provided in %s on line %d
 -- compile-error
