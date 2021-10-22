--TEST--
Test expm1() - Error conditions
--FILE--
<?php
/* Prototype  : float expm1  ( float $arg  )
 * Description: Returns exp(number) - 1, computed in a way that is accurate even
 *              when the value of number is close to zero.
 * Source code: ext/standard/math.c
 */

echo "*** Testing expm1() : error conditions ***\n";

echo "\n-- Testing expm1() function with more than expected no. of arguments --\n";
expm1(23,true);

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function expm1(): 1 at most, 2 provided in %s on line %d
 -- compile-error
