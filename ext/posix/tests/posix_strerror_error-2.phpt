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

echo "\n-- Testing posix_strerror() function with more than expected no. of arguments --\n";
$errno = posix_get_last_error();
$extra_arg = 10;
var_dump( posix_strerror($errno, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_strerror(): 1 at most, 2 provided in %s on line %d
 -- compile-error
