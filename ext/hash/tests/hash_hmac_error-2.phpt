--TEST--
Test hash_hmac() function : basic functionality
--FILE--
<?php

echo "\n-- Testing hash_hmac() function with less than expected no. of arguments --\n";
var_dump(hash_hmac('md5'));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hash_hmac(): 3 required, 1 provided in %s on line %d
 -- compile-error
