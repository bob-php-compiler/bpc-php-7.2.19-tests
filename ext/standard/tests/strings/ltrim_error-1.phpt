--TEST--
Test ltrim() function : error conditions
--FILE--
<?php

/* Prototype  : string ltrim  ( string $str  [, string $charlist  ] )
 * Description: Strip whitespace (or other characters) from the beginning of a string.
 * Source code: ext/standard/string.c
*/


echo "*** Testing ltrim() : error conditions ***\n";

echo "\n-- Testing ltrim() function with no arguments --\n";
var_dump( ltrim() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ltrim(): 1 required, 0 provided in %s on line %d
 -- compile-error
