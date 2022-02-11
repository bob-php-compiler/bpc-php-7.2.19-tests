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

// Zero arguments
echo "\n-- Testing gzcompress() function with Zero arguments --\n";
var_dump( gzcompress() );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gzcompress(): 1 required, 0 provided in %s on line %d
 -- compile-error
