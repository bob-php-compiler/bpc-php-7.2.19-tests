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

echo "\n-- Testing number_format() function with 3 arguments --\n";
number_format(23,2,true);

?>
===DONE===
--EXPECTF--
*** Testing number_format() : error conditions ***

-- Testing number_format() function with 3 arguments --

Warning: Wrong parameter count for number_format() in %s on line %d
===DONE===
