--TEST--
Test explode() function : error conditions
--FILE--
<?php

/* Prototype  : array explode  ( string $delimiter  , string $string  [, int $limit  ] )
 * Description: Split a string by string.
 * Source code: ext/standard/string.c
*/

echo "*** Testing explode() : error conditions ***\n";

echo "\n-- Testing explode() function with no arguments --\n";
var_dump( explode() );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function explode(): 2 required, 0 provided in %s on line %d
 -- compile-error
