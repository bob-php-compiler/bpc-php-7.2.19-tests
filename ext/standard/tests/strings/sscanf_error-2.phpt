--TEST--
Test sscanf() function : error conditions
--FILE--
<?php

/* Prototype  : mixed sscanf  ( string $str  , string $format  [, mixed &$...  ] )
 * Description: Parses input from a string according to a format
 * Source code: ext/standard/string.c
*/
echo "*** Testing sscanf() : error conditions ***\n";

$str = "Hello World";

echo "\n-- Testing sscanf() function with one argument --\n";
var_dump( sscanf($str) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function sscanf(): 2 required, 1 provided in %s on line %d
 -- compile-error
