--TEST--
Test hash_hmac_file() function : basic functionality
--FILE--
<?php

echo "*** Testing hash() : error conditions ***\n";

$file = "hash_file.txt";
$key = 'secret';

echo "\n-- Testing hash_hmac_file() function with more than expected no. of arguments --\n";
$extra_arg = 10;
hash_hmac_file('crc32', $file, $key, TRUE, $extra_arg);

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function hash_hmac_file(): 4 at most, 5 provided in %s on line %d
 -- compile-error
