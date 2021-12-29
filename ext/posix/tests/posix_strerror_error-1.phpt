--TEST--
Test posix_strerror() function : error conditions
--SKIPIF--
<?php
	if(!extension_loaded("posix")) print "skip - POSIX extension not loaded";
?>
--FILE--
<?php
/* Prototype  : proto string posix_strerror(int errno)
 * Description: Retrieve the system error message associated with the given errno.
 * Source code: ext/posix/posix.c
 * Alias to functions:
 */

echo "*** Testing posix_strerror() : error conditions ***\n";

echo "\n-- Testing posix_strerror() function with Zero arguments --\n";
var_dump( posix_strerror() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function posix_strerror(): 1 required, 0 provided in %s on line %d
 -- compile-error
