--TEST--
Test number_format() - wrong params test number_format()
--FILE--
<?php
/* Prototype  :  string number_format  ( float $number  [, int $decimals  ] )
 *               string number_format ( float $number , int $decimals , string $dec_point , string $thousands_sep )
 * Description: Format a number with grouped thousands
 * Source code: ext/standard/string.c
 */

echo "*** Testing number_format() : error conditions ***\n";

echo "\n-- Testing number_format() function with less than expected no. of arguments --\n";
number_format();

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function number_format(): 1 required, 0 provided in %s on line %d
 -- compile-error
