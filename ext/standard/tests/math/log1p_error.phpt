--TEST--
Test log1p() - Error conditions
--FILE--
<?php
/* Prototype  : float log1p  ( float $arg  )
 * Description: Returns log(1 + number), computed in a way that is accurate even
 *				when the value of number is close to zero
 * Source code: ext/standard/math.c
 */

echo "*** Testing log1p() : error conditions ***\n";

echo "\n-- Testing log1p() function with less than expected no. of arguments --\n";
log1p();

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function log1p(): 1 required, 0 provided in %s on line %d
 -- compile-error
