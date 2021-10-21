--TEST--
Test floor() - error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : float floor  ( float $value  )
 * Description: Round fractions down.
 * Source code: ext/standard/math.c
 */

echo "*** Testing floor() :  error conditions ***\n";

echo "\n-- Too few arguments --\n";
var_dump(floor());
?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function floor(): 1 required, 0 provided in %s on line %d
 -- compile-error
