--TEST--
Test glob() function: error conditions
--FILE--
<?php
/* Prototype: array glob ( string $pattern [, int $flags] );
   Description: Find pathnames matching a pattern
*/

echo "*** Testing glob() : error conditions ***\n";

echo "-- Testing glob() with unexpected no. of arguments --\n";
var_dump( glob("", GLOB_ERR, 3) );  // args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function glob(): 2 at most, 3 provided in %s on line %d
 -- compile-error
