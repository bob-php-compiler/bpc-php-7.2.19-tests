--TEST--
Test decbin() - Error conditions
--FILE--
<?php
echo "*** Testing decbin() : error conditions ***\n";

echo "\nIncorrect number of arguments\n";
decbin(23,2);
?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function decbin(): 1 at most, 2 provided in %s on line %d
 -- compile-error
