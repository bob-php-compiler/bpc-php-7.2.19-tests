--TEST--
Test hypot() - wrong params test hypot()
--FILE--
<?php
/* Prototype  : float hypot  ( float $x  , float $y  )
 * Description: Calculate the length of the hypotenuse of a right-angle triangle.
 * Source code: ext/standard/math.c
 */

echo "*** Testing hypot() : error conditions ***\n";

echo "\n-- Testing hypot() function with less than expected no. of arguments --\n";
hypot(36);

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hypot(): 2 required, 1 provided in %s on line %d
 -- compile-error
