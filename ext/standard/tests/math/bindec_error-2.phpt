--TEST--
Test bindec() function :  error conditions - incorrect input
--FILE--
<?php
/* Prototype  : number bindec  ( string $binary_string  )
 * Description: Returns the decimal equivalent of the binary number represented by the binary_string  argument.
 * Source code: ext/standard/math.c
 */

/*
 * Pass incorrect input to bindec() to test behaviour
 */

echo "*** Testing bindec() : error conditions ***\n";

echo "Incorrect number of arguments\n";
bindec('01010101111',true);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function bindec(): 1 at most, 2 provided in %s on line %d
 -- compile-error
