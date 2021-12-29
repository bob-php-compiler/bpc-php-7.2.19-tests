--TEST--
Test posix_getppid() function : error conditions
--SKIPIF--
<?php
	if(!extension_loaded("posix")) print "skip - POSIX extension not loaded";
?>
--FILE--
<?php
/* Prototype  : proto int posix_getppid(void)
 * Description: Get the parent process id (POSIX.1, 4.1.1)
 * Source code: ext/posix/posix.c
 * Alias to functions:
 */

echo "*** Testing posix_getppid() : error conditions ***\n";

// One argument
echo "\n-- Testing posix_getppid() function with one argument --\n";
$extra_arg = 10;
var_dump( posix_getppid($extra_arg) );

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_getppid(): 0 at most, 1 provided in %s on line %d
 -- compile-error
