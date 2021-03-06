--TEST--
Test ceil() - error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : float ceil  ( float $value  )
 * Description: Round fractions up.
 * Source code: ext/standard/math.c
 */

echo "*** Testing ceil() :  error conditions ***\n";
$arg_0 = 1.0;
$extra_arg = 1;

echo "\nToo many arguments\n";
var_dump(ceil($arg_0, $extra_arg));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ceil(): 1 at most, 2 provided in %s on line %d
 -- compile-error
