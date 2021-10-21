--TEST--
Test base_convert() function :  error conditions - incorrect input
--FILE--
<?php
/* Prototype  : string base_convert  ( string $number  , int $frombase  , int $tobase  )
 * Description: Convert a number between arbitrary bases.
 * Source code: ext/standard/math.c
 */

echo "*** Testing base_convert() : error conditions ***\n";

echo "Incorrect number of arguments\n";
base_convert(35);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function base_convert(): 3 required, 1 provided in %s on line %d
 -- compile-error
