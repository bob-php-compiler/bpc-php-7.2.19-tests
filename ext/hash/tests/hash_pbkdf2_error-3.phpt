--TEST--
Test hash_pbkdf2() function : error functionality
--FILE--
<?php

$password = 'password';

echo "\n-- Testing hash_pbkdf2() function with less than expected no. of arguments --\n";
var_dump(hash_pbkdf2('md5', $password));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hash_pbkdf2(): 4 required, 2 provided in %s on line %d
 -- compile-error
