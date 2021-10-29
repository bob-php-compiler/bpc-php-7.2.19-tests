--TEST--
Test hebrev() function : error conditions
--FILE--
<?php

/* Prototype  : string hebrev  ( string $hebrew_text  [, int $max_chars_per_line  ] )
 * Description: Convert logical Hebrew text to visual text
 * Source code: ext/standard/string.c
*/

echo "*** Testing hebrev() : error conditions ***\n";

echo "\n-- Testing hebrev() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( hebrev("Hello World", 5, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function hebrev(): 2 at most, 3 provided in %s on line %d
 -- compile-error
