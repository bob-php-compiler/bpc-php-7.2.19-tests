--TEST--
Test trim() function : error conditions
--FILE--
<?php

/* Prototype  : string trim  ( string $str  [, string $charlist  ] )
 * Description: Strip whitespace (or other characters) from the beginning and end of a string.
 * Source code: ext/standard/string.c
*/


echo "*** Testing trim() : error conditions ***\n";

echo "\n-- Testing trim() function with no arguments --\n";
var_dump( trim() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function trim(): 1 required, 0 provided in %s on line %d
 -- compile-error
