--TEST--
Test hebrev() function : error conditions
--FILE--
<?php

/* Prototype  : string hebrev  ( string $hebrew_text  [, int $max_chars_per_line  ] )
 * Description: Convert logical Hebrew text to visual text
 * Source code: ext/standard/string.c
*/

echo "*** Testing hebrev() : error conditions ***\n";

echo "\n-- Testing hebrev() function with no arguments --\n";
var_dump( hebrev() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hebrev(): 1 required, 0 provided in %s on line %d
 -- compile-error
