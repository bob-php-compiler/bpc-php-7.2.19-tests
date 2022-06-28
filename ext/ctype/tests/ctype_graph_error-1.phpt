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

//Test ctype_graph with one more than the expected number of arguments
echo "\n-- Testing ctype_graph() function with more than expected no. of arguments --\n";
$c = 1;
$extra_arg = 10;
var_dump( ctype_graph($c, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ctype_graph(): 1 at most, 2 provided in %s on line %d
 -- compile-error
