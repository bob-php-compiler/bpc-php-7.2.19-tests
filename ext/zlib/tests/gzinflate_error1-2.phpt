--TEST--
Test gzinflate() function : error conditions
--SKIPIF--
<?php
if (!extension_loaded("zlib")) {
	print "skip - ZLIB extension not loaded";
}
?>
--FILE--
<?php

echo "*** Testing gzinflate() : error conditions ***\n";

echo "\n-- Testing gzcompress() function with more than expected no. of arguments --\n";
$data = 'string_val';
$length = 10;
$extra_arg = 10;
var_dump( gzinflate($data, $length, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gzinflate(): 2 at most, 3 provided in %s on line %d
 -- compile-error
