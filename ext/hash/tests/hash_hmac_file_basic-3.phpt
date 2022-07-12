--TEST--
Test hash_hmac_file() function : basic functionality
--FILE--
<?php

hash_hmac_file('foo', 'file', 'key', TRUE, 10);

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function hash_hmac_file(): 4 at most, 5 provided in %s on line %d
 -- compile-error
