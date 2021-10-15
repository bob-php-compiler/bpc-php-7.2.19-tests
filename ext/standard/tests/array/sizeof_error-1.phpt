--TEST--
Test sizeof() function : error conditions
--FILE--
<?php
/* Prototype  : int sizeof(mixed $var[, int $mode] )
 * Description: Counts an elements in an array. If Standard PHP Library is installed,
 * it will return the properties of an object.
 * Source code: ext/standard/basic_functions.c
 * Alias to functions: count()
 */

// Calling sizeof() with zero and more than expected arguments .

echo "*** Testing sizeof() : error conditions ***\n";

echo "-- Testing sizeof() function with more than two arguments under COUNT_NORMAL mode --\n";
$var = 100;
$extra_arg = 10;
var_dump( sizeof($var, COUNT_NORMAL, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function sizeof(): 2 at most, 3 provided in %s on line %d
 -- compile-error
