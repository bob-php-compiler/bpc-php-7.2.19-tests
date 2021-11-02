--TEST--
Test sscanf() function : error conditions
--FILE--
<?php

/* Prototype  : mixed sscanf  ( string $str  , string $format  [, mixed &$...  ] )
 * Description: Parses input from a string according to a format
 * Source code: ext/standard/string.c
*/
echo "*** Testing sscanf() : error conditions ***\n";

echo "\n-- Testing sscanf() function with no arguments --\n";
var_dump( sscanf() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function sscanf(): 2 required, 0 provided in %s on line %d
 -- compile-error
