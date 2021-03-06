--TEST--
Test chop() function : error conditions
--FILE--
<?php
/* Prototype  : string chop ( string $str [, string $charlist] )
 * Description: Strip whitespace (or other characters) from the end of a string
 * Source code: ext/standard/string.c
*/

/*
 * Testing chop() : error conditions
*/

echo "*** Testing chop() : error conditions ***\n";

// Zero argument
echo "\n-- Testing chop() function with Zero arguments --\n";
var_dump( chop() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function chop(): 1 required, 0 provided in %s on line %d
 -- compile-error
