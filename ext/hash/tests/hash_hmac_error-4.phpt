--TEST--
Test hash_hmac() function : basic functionality
--FILE--
<?php

$data = "This is a sample string used to test the hash_hmac function with various hashing algorithms";
$key = 'secret';

echo "\n-- Testing hash_hmac() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump(hash_hmac('md5', $data, $key, TRUE, $extra_arg));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function hash_hmac(): 4 at most, 5 provided in %s on line %d
 -- compile-error
