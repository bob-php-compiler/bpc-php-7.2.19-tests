--TEST--
Test hash_hmac_file() function : basic functionality
--FILE--
<?php

echo "*** Testing hash() : error conditions ***\n";

echo "\n-- Testing hash_hmac_file() function with less than expected no. of arguments --\n";
var_dump(hash_hmac_file('crc32'));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hash_hmac_file(): 3 required, 1 provided in %s on line %d
 -- compile-error
