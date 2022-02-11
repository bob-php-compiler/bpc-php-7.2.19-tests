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

// Zero arguments
echo "\n-- Testing gzdeflate() function with Zero arguments --\n";
var_dump( gzdeflate() );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gzdeflate(): 1 required, 0 provided in %s on line %d
 -- compile-error
