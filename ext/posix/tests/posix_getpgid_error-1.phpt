--TEST--
Test posix_getpgid() function : error conditions
--SKIPIF--
<?php
if((!extension_loaded("posix")) || (!function_exists("posix_getpgid"))) {
	 print "skip - POSIX extension not loaded or posix_getpgid() does not exist";
}
?>
--FILE--
<?php
/* Prototype  : proto int posix_getpgid(void)
 * Description: Get the process group id of the specified process (This is not a POSIX function, but a SVR4ism, so we compile conditionally)
 * Source code: ext/posix/posix.c
 * Alias to functions:
 */

echo "*** Testing posix_getpgid() : error conditions ***\n";

echo "\n-- Testing posix_getpgid() function no arguments --\n";
var_dump( posix_getpgid() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function posix_getpgid(): 1 required, 0 provided in %s on line %d
 -- compile-error
