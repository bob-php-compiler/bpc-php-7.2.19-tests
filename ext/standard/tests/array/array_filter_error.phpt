--TEST--
Test array_filter() function : error conditions
--FILE--
<?php
/* Prototype  : array array_filter(array $input [, callback $callback])
 * Description: Filters elements from the array via the callback.
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_filter() : error conditions ***\n";

// zero arguments
echo "-- Testing array_filter() function with Zero arguments --";
var_dump( array_filter() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_filter(): 1 required, 0 provided in %s on line %d
 -- compile-error
