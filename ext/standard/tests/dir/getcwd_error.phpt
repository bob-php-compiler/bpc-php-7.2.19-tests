--TEST--
Test getcwd() function : error conditions - Incorrect number of arguments
--FILE--
<?php
/* Prototype  : mixed getcwd(void)
 * Description: Gets the current directory
 * Source code: ext/standard/dir.c
 */

/*
 * Pass incorrect number of arguments to getcwd() to test behaviour
 */

echo "*** Testing getcwd() : error conditions ***\n";

// One argument
echo "\n-- Testing getcwd() function with one argument --\n";
$extra_arg = 10;
var_dump( getcwd($extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function getcwd(): 0 at most, 1 provided in %s on line %d
 -- compile-error
