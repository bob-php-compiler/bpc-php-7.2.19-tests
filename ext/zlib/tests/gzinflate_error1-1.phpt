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

echo "\n-- Testing gzcompress() function with Zero arguments --\n";
var_dump( gzinflate() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gzinflate(): 1 required, 0 provided in %s on line %d
 -- compile-error
