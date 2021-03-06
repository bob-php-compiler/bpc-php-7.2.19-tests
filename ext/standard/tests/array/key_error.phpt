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

// Zero arguments
echo "\n-- Testing key() function with Zero arguments --\n";
var_dump( key() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function key(): 1 required, 0 provided in %s on line %d
 -- compile-error
