--TEST--
Test opendir() function : error conditions - Incorrect number of args
--FILE--
<?php
/* Prototype  : mixed opendir(string $path[, resource $context])
 * Description: Open a directory and return a dir_handle
 * Source code: ext/standard/dir.c
 */

/*
 * Pass incorrect number of arguments to opendir() to test behaviour
 */

echo "*** Testing opendir() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing opendir() function with Zero arguments --\n";
var_dump( opendir() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function opendir(): 1 required, 0 provided in %s on line %d
 -- compile-error
