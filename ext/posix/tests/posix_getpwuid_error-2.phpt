--TEST--
Test posix_getpwuid() function : error conditions
--SKIPIF--
<?php
	if(!extension_loaded("posix")) print "skip - POSIX extension not loaded";
?>
--FILE--
<?php
/* Prototype  : proto array posix_getpwuid(long uid)
 * Description: User database access (POSIX.1, 9.2.2)
 * Source code: ext/posix/posix.c
 * Alias to functions:
 */

echo "*** Testing posix_getpwuid() : error conditions ***\n";

echo "\n-- Testing posix_getpwuid() function with more than expected no. of arguments --\n";
$uid = posix_getuid();
$extra_arg = 10;
var_dump( posix_getpwuid($uid, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_getpwuid(): 1 at most, 2 provided in %s on line %d
 -- compile-error
