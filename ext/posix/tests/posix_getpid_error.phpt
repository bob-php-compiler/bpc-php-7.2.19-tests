--TEST--
Test posix_getpid() function : error conditions
--SKIPIF--
<?php
	if(!extension_loaded("posix")) print "skip - POSIX extension not loaded";
?>
--FILE--
<?php
/* Prototype  : proto int posix_getpid(void)
 * Description: Get the current process id (POSIX.1, 4.1.1)
 * Source code: ext/posix/posix.c
 * Alias to functions:
 */

echo "*** Testing posix_getpid() : error conditions ***\n";

// One argument
echo "\n-- Testing posix_getpid() function with one argument --\n";
$extra_arg = 10;
var_dump( posix_getpid($extra_arg) );

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_getpid(): 0 at most, 1 provided in %s on line %d
 -- compile-error
