--TEST--
Test decbin() - Error conditions
--FILE--
<?php
echo "*** Testing decbin() : error conditions ***\n";

echo "\nIncorrect number of arguments\n";
decbin();
?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function decbin(): 1 required, 0 provided in %s on line %d
 -- compile-error
