--TEST--
Test ctype_lower() function : error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : bool ctype_lower(mixed $c)
 * Description: Checks for lowercase character(s)
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass incorrect number of arguments to ctype_lower() to test behaviour
 */

echo "*** Testing ctype_lower() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing ctype_lower() function with Zero arguments --\n";
var_dump( ctype_lower() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ctype_lower(): 1 required, 0 provided in %s on line %d
 -- compile-error
