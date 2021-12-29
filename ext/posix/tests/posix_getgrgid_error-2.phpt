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

//Test posix_getgrgid with one more than the expected number of arguments
echo "\n-- Testing posix_getgrgid() function with more than expected no. of arguments --\n";

$extra_arg = 10;
$gid = 0;
var_dump( posix_getgrgid($gid, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_getgrgid(): 1 at most, 2 provided in %s on line %d
 -- compile-error
