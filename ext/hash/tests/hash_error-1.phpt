--TEST--
Test hash() function : error conditions
--FILE--
<?php

echo "*** Testing hash() : error conditions ***\n";

echo "\n-- Testing hash() function with less than expected no. of arguments --\n";
var_dump(hash());

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hash(): 2 required, 0 provided in %s on line %d
 -- compile-error
