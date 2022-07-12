--TEST--
Test hash_hmac() function : basic functionality
--FILE--
<?php

$data = "This is a sample string used to test the hash_hmac function with various hashing algorithms";

echo "\n-- Testing hash_hmac() function with less than expected no. of arguments --\n";
var_dump(hash_hmac('md5', $data));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hash_hmac(): 3 required, 2 provided in %s on line %d
 -- compile-error
