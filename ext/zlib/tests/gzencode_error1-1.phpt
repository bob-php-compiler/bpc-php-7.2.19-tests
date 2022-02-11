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

// Zero arguments
echo "\n-- Testing gzencode() function with Zero arguments --\n";
var_dump( gzencode() );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gzencode(): 1 required, 0 provided in %s on line %d
 -- compile-error
