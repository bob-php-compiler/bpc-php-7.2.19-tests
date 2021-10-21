--TEST--
Test round() function :  error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : float round  ( float $val  [, int $precision  ] )
 * Description: Returns the rounded value of val  to specified precision (number of digits
 * after the decimal point)
 * Source code: ext/standard/math.c
 */

/*
 * Pass incorrect number of arguments to round() to test behaviour
 */

echo "*** Testing round() : error conditions ***\n";

echo "\n-- Wrong nmumber of arguments --\n";
var_dump(round());

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function round(): 1 required, 0 provided in %s on line %d
 -- compile-error
