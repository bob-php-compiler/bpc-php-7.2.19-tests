--TEST--
Test dechex() - wrong params dechex()
--FILE--
<?php
/* Prototype  : string dechex  ( int $number  )
 * Description: Returns a string containing a hexadecimal representation of the given number  argument.
 * Source code: ext/standard/math.c
 */

echo "*** Testing dechex() : error conditions ***\n";

echo "\nIncorrect number of arguments\n";
dechex(23,2);

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function dechex(): 1 at most, 2 provided in %s on line %d
 -- compile-error
