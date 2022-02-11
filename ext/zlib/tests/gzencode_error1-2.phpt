--TEST--
Test gzencode() function : error conditions
--SKIPIF--
<?php
if (!extension_loaded("zlib")) {
	print "skip - ZLIB extension not loaded";
}
?>
--FILE--
<?php

echo "*** Testing gzencode() : error conditions ***\n";

//Test gzencode with one more than the expected number of arguments
echo "\n-- Testing gzencode() function with more than expected no. of arguments --\n";
$data = 'string_val';
$level = 2;
$encoding_mode = FORCE_DEFLATE;
$extra_arg = 10;
var_dump( gzencode($data, $level, $encoding_mode, $extra_arg) );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gzencode(): 3 at most, 4 provided in %s on line %d
 -- compile-error
