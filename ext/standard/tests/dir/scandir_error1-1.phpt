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

//Test scandir with one more than the expected number of arguments
echo "\n-- Testing scandir() function with more than expected no. of arguments --\n";
$dir = dirname(__FILE__) . '/scandir_error';
mkdir($dir);
$sorting_order = 10;
$context = stream_context_create();
$extra_arg = 10;
var_dump( scandir($dir, $sorting_order, $context, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function scandir(): 3 at most, 4 provided in %s on line %d
 -- compile-error
