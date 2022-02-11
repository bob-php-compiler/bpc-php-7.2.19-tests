--TEST--
Test gzuncompress() function : error conditions
--SKIPIF--
<?php
if (!extension_loaded("zlib")) {
	print "skip - ZLIB extension not loaded";
}
?>
--FILE--
<?php
/* Prototype  : string gzuncompress(string data [, int length])
 * Description: Unzip a gzip-compressed string
 * Source code: ext/zlib/zlib.c
 * Alias to functions:
 */

echo "*** Testing gzuncompress() : error conditions ***\n";

//Test gzuncompress with one more than the expected number of arguments
echo "\n-- Testing gzuncompress() function with more than expected no. of arguments --\n";
$data = 'string_val';
$length = 10;
$extra_arg = 10;
var_dump( gzuncompress($data, $length, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gzuncompress(): 2 at most, 3 provided in %s on line %d
 -- compile-error
