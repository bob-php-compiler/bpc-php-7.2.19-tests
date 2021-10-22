--TEST--
Test hypot() - wrong params test hypot()
--FILE--
<?php
/* Prototype  : float hypot  ( float $x  , float $y  )
 * Description: Calculate the length of the hypotenuse of a right-angle triangle.
 * Source code: ext/standard/math.c
 */

echo "*** Testing hypot() : error conditions ***\n";

echo "\n-- Testing hypot() function with more than expected no. of arguments --\n";
hypot(36,25,0);

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function hypot(): 2 at most, 3 provided in %s on line %d
 -- compile-error
