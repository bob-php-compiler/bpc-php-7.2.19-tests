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

echo "\n-- Testing number_format() function with more than 4 arguments --\n";
number_format(23,2,true,false,36);

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function number_format(): 4 at most, 5 provided in %s on line %d
 -- compile-error
