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

//Test opendir with one more than the expected number of arguments
echo "\n-- Testing opendir() function with more than expected no. of arguments --\n";
$path = dirname(__FILE__) . "/opendir_error";
mkdir($path);
$context = stream_context_create();

$extra_arg = 10;
var_dump( opendir($path, $context, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function opendir(): 2 at most, 3 provided in %s on line %d
 -- compile-error
