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

echo "-- Testing sizeof() with zero arguments --\n";
var_dump( sizeof() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function sizeof(): 1 required, 0 provided in %s on line %d
 -- compile-error
