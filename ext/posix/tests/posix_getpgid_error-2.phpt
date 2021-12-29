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

echo "\n-- Testing posix_getpgid() with one extra argument --\n";
$pid = 10;
$extra_arg = 20;
var_dump( posix_getpgid($pid, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_getpgid(): 1 at most, 2 provided in %s on line %d
 -- compile-error
