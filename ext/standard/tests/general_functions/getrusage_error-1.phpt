--TEST--
Test getrusage() function : error conditions - incorrect number of args
--SKIPIF--
<?php if (!function_exists("getrusage")) print "skip"; ?>
--FILE--
<?php
/* Prototype  :  array getrusage  ([ int $who  ] )
 * Description: Gets the current resource usages
 * Source code: ext/standard/microtime.c
 * Alias to functions:
 */

/*
 * Pass an incorrect number of arguments to getrusage() to test behaviour
 */

echo "*** Testing getrusage() : error conditions ***\n";

echo "\n-- Testing getrusage() function with more than expected no. of arguments --\n";
$extra_arg = 10;
$dat = getrusage(1, $extra_arg);

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function getrusage(): 1 at most, 2 provided in %s on line %d
 -- compile-error
