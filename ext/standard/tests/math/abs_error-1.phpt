--TEST--
Test abs() function :  error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : number abs  ( mixed $number  )
 * Description: Returns the absolute value of number.
 * Source code: ext/standard/math.c
 */

/*
 * Pass incorrect number of arguments to abs() to test behaviour
 */

echo "*** Testing abs() : error conditions ***\n";

echo "\nToo few arguments\n";
var_dump(abs());

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function abs(): 1 required, 0 provided in %s on line %d
 -- compile-error
