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

// Zero arguments
echo "\n-- Testing gzuncompress() function with Zero arguments --\n";
var_dump( gzuncompress() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gzuncompress(): 1 required, 0 provided in %s on line %d
 -- compile-error
