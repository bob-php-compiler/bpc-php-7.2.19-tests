--TEST--
Test finfo_buffer() function : error conditions
--FILE--
<?php
/* Prototype  : string finfo_buffer(resource finfo, char *string [, int options [, resource context]])
 * Description: Return infromation about a string buffer.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

$magicFile = './magic';

echo "*** Testing finfo_buffer() : error conditions ***\n";

$finfo = finfo_open( FILEINFO_NONE, $magicFile );

// Testing finfo_buffer with one less than the expected number of arguments
echo "\n-- Testing finfo_buffer() function with less than expected no. of arguments --\n";

var_dump( finfo_buffer($finfo) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function finfo_buffer(): 2 required, 1 provided in %s on line %d
 -- compile-error
