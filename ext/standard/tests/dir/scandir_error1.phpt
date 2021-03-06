--TEST--
Test scandir() function : error conditions - Incorrect number of args
--FILE--
<?php
/* Prototype  : array scandir(string $dir [, int $sorting_order [, resource $context]])
 * Description: List files & directories inside the specified path
 * Source code: ext/standard/dir.c
 */

/*
 * Pass incorrect number of arguments to scandir() to test behaviour
 */

echo "*** Testing scandir() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing scandir() function with Zero arguments --\n";
var_dump( scandir() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function scandir(): 1 required, 0 provided in %s on line %d
 -- compile-error
