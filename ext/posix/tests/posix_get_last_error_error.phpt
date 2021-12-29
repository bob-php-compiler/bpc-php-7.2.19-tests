--TEST--
Test posix_get_last_error() function : error conditions
--SKIPIF--
<?php
	if(!extension_loaded("posix")) print "skip - POSIX extension not loaded";
?>
--FILE--
<?php
/* Prototype  : proto int posix_get_last_error(void)
 * Description: Retrieve the error number set by the last posix function which failed.
 * Source code: ext/posix/posix.c
 * Alias to functions: posix_errno
 */

echo "*** Testing posix_get_last_error() : error conditions ***\n";

// One argument
echo "\n-- Testing posix_get_last_error() function with one argument --\n";
$extra_arg = 10;
var_dump( posix_get_last_error($extra_arg) );

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_get_last_error(): 0 at most, 1 provided in %s on line %d
 -- compile-error
