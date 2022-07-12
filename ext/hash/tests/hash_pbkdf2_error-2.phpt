--TEST--
Test hash_pbkdf2() function : error functionality
--FILE--
<?php

echo "\n-- Testing hash_pbkdf2() function with less than expected no. of arguments --\n";
var_dump(hash_pbkdf2('md5'));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hash_pbkdf2(): 4 required, 1 provided in %s on line %d
 -- compile-error
