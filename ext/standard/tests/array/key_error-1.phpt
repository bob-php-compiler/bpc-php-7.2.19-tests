--TEST--
Test key() function : error conditions - Pass incorrect number of args
--FILE--
<?php
/* Prototype  : mixed key(array $array_arg)
 * Description: Return the key of the element currently pointed to by the internal array pointer
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to key() to test behaviour
 */

echo "*** Testing key() : error conditions ***\n";

//Test current with one more than the expected number of arguments
echo "\n-- Testing key() function with more than expected no. of arguments --\n";
$array_arg = array(1, 2);
$extra_arg = 10;
var_dump( key($array_arg, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function key(): 1 at most, 2 provided in %s on line %d
 -- compile-error
