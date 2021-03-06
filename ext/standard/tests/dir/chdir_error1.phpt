--TEST--
Test chdir() function : error conditions - Incorrect number of arguments
--FILE--
<?php
/* Prototype  : bool chdir(string $directory)
 * Description: Change the current directory
 * Source code: ext/standard/dir.c
 */

/*
 * Pass incorrect number of arguments to chdir() to test behaviour
 */

echo "*** Testing chdir() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing chdir() function with Zero arguments --\n";
var_dump( chdir() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function chdir(): 1 required, 0 provided in %s on line %d
 -- compile-error
