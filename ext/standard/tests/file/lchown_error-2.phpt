--TEST--
Test lchown() function : error functionality
--FILE--
<?php
/* Prototype  : bool lchown (string filename, mixed user)
 * Description: Change file owner of a symlink
 * Source code: ext/standard/filestat.c
 * Alias to functions:
 */

echo "*** Testing lchown() : error functionality ***\n";

// Set up
$filename = 'lchown.txt';
$uid = posix_getuid();


// More than expected arguments
var_dump( lchown( $filename, $uid, 'foobar' ) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function lchown(): 2 at most, 3 provided in %s on line %d
 -- compile-error
