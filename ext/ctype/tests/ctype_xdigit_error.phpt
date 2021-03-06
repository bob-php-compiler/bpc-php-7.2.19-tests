--TEST--
Test ctype_xdigit() function : error conditions - Incorrect number of args
--FILE--
<?php
/* Prototype  : bool ctype_xdigit(mixed $c)
 * Description: Checks for character(s) representing a hexadecimal digit
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass incorrect number of arguments to ctype_xdigit() to test behaviour
 */

echo "*** Testing ctype_xdigit() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing ctype_xdigit() function with Zero arguments --\n";
var_dump( ctype_xdigit() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ctype_xdigit(): 1 required, 0 provided in %s on line %d
 -- compile-error
