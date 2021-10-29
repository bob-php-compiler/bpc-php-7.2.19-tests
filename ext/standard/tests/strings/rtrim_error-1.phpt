--TEST--
Test rtrim() function : error conditions
--FILE--
<?php

/* Prototype  : string rtrim  ( string $str  [, string $charlist  ] )
 * Description: Strip whitespace (or other characters) from the end of a string.
 * Source code: ext/standard/string.c
*/


echo "*** Testing rtrim() : error conditions ***\n";

echo "\n-- Testing rtrim() function with no arguments --\n";
var_dump( rtrim() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function rtrim(): 1 required, 0 provided in %s on line %d
 -- compile-error
