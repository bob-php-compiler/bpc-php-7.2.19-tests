--TEST--
Test hash() function : error conditions
--FILE--
<?php

echo "*** Testing hash() : error conditions ***\n";

echo "\n-- Testing hash() function with more than expected no. of arguments --\n";
$extra_arg= 10;
var_dump(hash('adler32', '', false, $extra_arg));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function hash(): 3 at most, 4 provided in %s on line %d
 -- compile-error
