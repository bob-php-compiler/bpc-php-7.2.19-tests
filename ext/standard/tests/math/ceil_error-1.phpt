--TEST--
Test ceil() - error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : float ceil  ( float $value  )
 * Description: Round fractions up.
 * Source code: ext/standard/math.c
 */

echo "*** Testing ceil() :  error conditions ***\n";

echo "\nToo few arguments\n";
var_dump(ceil());
?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ceil(): 1 required, 0 provided in %s on line %d
 -- compile-error
