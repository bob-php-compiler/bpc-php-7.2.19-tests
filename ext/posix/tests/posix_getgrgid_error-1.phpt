--TEST--
Test posix_getgrgid() function : error conditions
--SKIPIF--
<?php
	if(!extension_loaded("posix")) print "skip - POSIX extension not loaded";
?>
--FILE--
<?php
/* Prototype  : proto array posix_getgrgid(long gid)
 * Description: Group database access (POSIX.1, 9.2.1)
 * Source code: ext/posix/posix.c
 * Alias to functions:
 */

echo "*** Testing posix_getgrgid() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing posix_getgrgid() function with Zero arguments --\n";
var_dump( posix_getgrgid() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function posix_getgrgid(): 1 required, 0 provided in %s on line %d
 -- compile-error
