--TEST--
Test json_encode() function : error conditions
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php
echo "*** Testing json_encode() : error conditions ***\n";

echo "\n-- Testing json_encode() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump(json_encode("abc", 0, 512, $extra_arg));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function json_encode(): 3 at most, 4 provided in %s on line %d
 -- compile-error
