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

//Test chdir with one more than the expected number of arguments
echo "\n-- Testing chdir() function with more than expected no. of arguments --\n";
$directory = __FILE__;
$extra_arg = 10;
var_dump( chdir($directory, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function chdir(): 1 at most, 2 provided in %s on line %d
 -- compile-error
