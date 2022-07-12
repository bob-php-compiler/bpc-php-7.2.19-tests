--TEST--
Test hash_hkdf() function: error conditions
--FILE--
<?php

echo "\n-- Testing hash_hkdf() function with less than expected no. of arguments --\n";
var_dump(hash_hkdf('sha1'));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hash_hkdf(): 2 required, 1 provided in %s on line %d
 -- compile-error
