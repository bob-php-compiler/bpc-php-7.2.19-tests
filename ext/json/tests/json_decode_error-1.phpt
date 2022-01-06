--TEST--
Test json_decode() function : error conditions
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php
echo "*** Testing json_decode() : error conditions ***\n";

echo "\n-- Testing json_decode() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump(json_decode('"abc"', true, 512, 0, $extra_arg));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function json_decode(): 4 at most, 5 provided in %s on line %d
 -- compile-error
