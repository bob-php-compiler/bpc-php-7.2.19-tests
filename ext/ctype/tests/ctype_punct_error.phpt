--TEST--
Test ctype_punct() function : error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : bool ctype_punct(mixed $c)
 * Description: Checks for any printable character which is not whitespace
 * or an alphanumeric character
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass incorrect number of arguments to ctype_punct() to test behaviour
 */

echo "*** Testing ctype_punct() : error conditions ***\n";

$orig = setlocale(LC_CTYPE, "C");

// Zero arguments
echo "\n-- Testing ctype_punct() function with Zero arguments --\n";
var_dump( ctype_punct() );

setlocale(LC_CTYPE, $orig);
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ctype_punct(): 1 required, 0 provided in %s on line %d
 -- compile-error
