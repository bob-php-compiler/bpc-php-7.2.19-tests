--TEST--
Test ctype_alnum() function : error conditions - Incorrect number of args
--FILE--
<?php
/* Prototype  : bool ctype_alnum(mixed $c)
 * Description: Checks for alphanumeric character(s)
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass incorrect number of arguments to ctype_alnum() to test behaviour
 */

echo "*** Testing ctype_alnum() : error conditions ***\n";

$orig = setlocale(LC_CTYPE, "C");

// Zero arguments
echo "\n-- Testing ctype_alnum() function with Zero arguments --\n";
var_dump( ctype_alnum() );

setlocale(LC_CTYPE, $orig);
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ctype_alnum(): 1 required, 0 provided in %s on line %d
 -- compile-error
