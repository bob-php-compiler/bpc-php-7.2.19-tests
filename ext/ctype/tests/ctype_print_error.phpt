--TEST--
Test ctype_print() function : error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : bool ctype_print(mixed $c)
 * Description: Checks for printable character(s)
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass incorrect number of arguments to ctype_print() to test behaviour
 */

echo "*** Testing ctype_print() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing ctype_print() function with Zero arguments --\n";
var_dump( ctype_print() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ctype_print(): 1 required, 0 provided in %s on line %d
 -- compile-error
