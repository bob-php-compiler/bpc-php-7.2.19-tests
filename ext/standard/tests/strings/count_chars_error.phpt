--TEST--
Test count_chars() function : error conditions
--FILE--
<?php

/* Prototype  : mixed count_chars  ( string $string  [, int $mode  ] )
 * Description: Return information about characters used in a string
 * Source code: ext/standard/string.c
*/

echo "*** Testing count_chars() : error conditions ***\n";

echo "\n-- Testing count_chars() function with no arguments --\n";
var_dump( count_chars() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function count_chars(): 1 required, 0 provided in %s on line %d
 -- compile-error
