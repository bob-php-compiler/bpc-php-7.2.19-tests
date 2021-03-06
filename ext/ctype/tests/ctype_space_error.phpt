--TEST--
Test ctype_space() function : error conditions - Incorrect number of args
--FILE--
<?php
/* Prototype  : bool ctype_space(mixed $c)
 * Description: Checks for whitespace character(s)
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass an incorrect number of arguments to ctype_space() to test behaviour
 */

echo "*** Testing ctype_space() : error conditions ***\n";

$orig = setlocale(LC_CTYPE, "C");

// Zero arguments
echo "\n-- Testing ctype_space() function with Zero arguments --\n";
var_dump( ctype_space() );

setlocale(LC_CTYPE, $orig);
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ctype_space(): 1 required, 0 provided in %s on line %d
 -- compile-error
