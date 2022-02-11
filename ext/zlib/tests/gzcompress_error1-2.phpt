--TEST--
Test gzcompress() function : error conditions
--SKIPIF--
<?php
if (!extension_loaded("zlib")) {
	print "skip - ZLIB extension not loaded";
}
?>
--FILE--
<?php

echo "*** Testing gzcompress() : error conditions ***\n";

//Test gzcompress with one more than the expected number of arguments
echo "\n-- Testing gzcompress() function with more than expected no. of arguments --\n";
$data = 'string_val';
$level = 2;
$encoding = ZLIB_ENCODING_RAW;
$extra_arg = 10;
var_dump( gzcompress($data, $level, $encoding, $extra_arg) );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gzcompress(): 3 at most, 4 provided in %s on line %d
 -- compile-error
