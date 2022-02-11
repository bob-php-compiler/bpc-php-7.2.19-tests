--TEST--
Test gzdeflate() function : error conditions
--SKIPIF--
<?php
if (!extension_loaded("zlib")) {
	print "skip - ZLIB extension not loaded";
}
?>
--FILE--
<?php

echo "*** Testing gzdeflate() : error conditions ***\n";

//Test gzdeflate with one more than the expected number of arguments
echo "\n-- Testing gzdeflate() function with more than expected no. of arguments --\n";
$data = 'string_val';
$level = 2;
$encoding = ZLIB_ENCODING_RAW;
$extra_arg = 10;
var_dump( gzdeflate($data, $level, $encoding, $extra_arg) );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gzdeflate(): 3 at most, 4 provided in %s on line %d
 -- compile-error
