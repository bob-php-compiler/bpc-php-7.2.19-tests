--TEST--
Test finfo_close() function : error conditions
--FILE--
<?php
/* Prototype  : resource finfo_close(resource finfo)
 * Description: Close fileinfo resource.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

echo "*** Testing finfo_close() : error conditions ***\n";

$magicFile = './magic';
$finfo = finfo_open( FILEINFO_MIME, $magicFile );

echo "\n-- Testing finfo_close() function with more than expected no. of arguments --\n";
var_dump( finfo_close( $finfo, '10') );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function finfo_close(): 1 at most, 2 provided in %s on line %d
 -- compile-error
