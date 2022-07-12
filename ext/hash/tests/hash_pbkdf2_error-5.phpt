--TEST--
Test hash_pbkdf2() function : error functionality
--FILE--
<?php

echo "*** Testing hash_pbkdf2() : error conditions ***\n";

$password = 'password';
$salt = 'salt';

echo "\n-- Testing hash_pbkdf2() function with more than expected no. of arguments --\n";
var_dump(hash_pbkdf2('md5', $password, $salt, 10, 10, true, 'extra arg'));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function hash_pbkdf2(): 6 at most, 7 provided in %s on line %d
 -- compile-error
