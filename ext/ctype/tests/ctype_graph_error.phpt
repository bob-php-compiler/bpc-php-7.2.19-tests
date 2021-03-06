--TEST--
Test ctype_graph() function : error conditions - incorrect number of arguments
--FILE--
<?php
/* Prototype  : bool ctype_graph(mixed $c)
 * Description: Checks for any printable character(s) except space
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass an incorrect number of arguments to ctype_graph() to test behaviour
 */

echo "*** Testing ctype_graph() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing ctype_graph() function with Zero arguments --\n";
var_dump( ctype_graph() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ctype_graph(): 1 required, 0 provided in %s on line %d
 -- compile-error
