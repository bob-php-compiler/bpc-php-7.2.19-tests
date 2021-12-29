--TEST--
Test posix_kill() function : error conditions
--SKIPIF--
<?php
	if(!extension_loaded("posix")) print "skip - POSIX extension not loaded";
?>
--FILE--
<?php
/* Prototype  : proto bool posix_kill(int pid, int sig)
 * Description: Send a signal to a process (POSIX.1, 3.3.2)
 * Source code: ext/posix/posix.c
 * Alias to functions:
 */


echo "*** Testing posix_kill() : error conditions ***\n";


echo "\n-- Testing posix_kill() function with more than expected no. of arguments --\n";
$pid = posix_getpid();
$sig = 9;
$extra_arg = 10;
var_dump( posix_kill($pid, $sig, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_kill(): 2 at most, 3 provided in %s on line %d
 -- compile-error
