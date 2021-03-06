--TEST--
Test floor() - error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : float floor  ( float $value  )
 * Description: Round fractions down.
 * Source code: ext/standard/math.c
 */

echo "*** Testing floor() :  error conditions ***\n";
$arg_0 = 1.0;
$extra_arg = 1;

echo "\n-- Too many arguments --\n";
var_dump(floor($arg_0, $extra_arg));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function floor(): 1 at most, 2 provided in %s on line %d
 -- compile-error
