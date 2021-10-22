--TEST--
Test decoct() -  error conditions
--FILE--
<?php
/* Prototype  : string decbin  ( int $number  )
 * Description: Decimal to binary.
 * Source code: ext/standard/math.c
 */

echo "*** Testing decoct() :  error conditions ***\n";

echo "Incorrect number of arguments\n";
decoct(23,2);

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function decoct(): 1 at most, 2 provided in %s on line %d
 -- compile-error
