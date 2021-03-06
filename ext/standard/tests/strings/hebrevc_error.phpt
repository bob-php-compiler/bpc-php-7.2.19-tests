--TEST--
Test hebrevc() function : error conditions
--FILE--
<?php

/* Prototype  : string hebrevc  ( string $hebrew_text  [, int $max_chars_per_line  ] )
 * Description: Convert logical Hebrew text to visual text
 * Source code: ext/standard/string.c
*/

echo "*** Testing hebrevc() : error conditions ***\n";

echo "\n-- Testing hebrevc() function with no arguments --\n";
var_dump( hebrevc() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hebrevc(): 1 required, 0 provided in %s on line %d
 -- compile-error
