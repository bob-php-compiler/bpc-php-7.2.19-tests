--TEST--
Test posix_times() function : error conditions
--SKIPIF--
<?php
	if(!extension_loaded("posix")) print "skip - POSIX extension not loaded";
?>
--FILE--
<?php
/* Prototype  : proto array posix_times(void)
 * Description: Get process times (POSIX.1, 4.5.2)
 * Source code: ext/posix/posix.c
 * Alias to functions:
 */

echo "*** Testing posix_times() : error conditions ***\n";

// One argument
echo "\n-- Testing posix_times() function with one argument --\n";
$extra_arg = 10;
var_dump( posix_times($extra_arg) );

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_times(): 0 at most, 1 provided in %s on line %d
 -- compile-error
