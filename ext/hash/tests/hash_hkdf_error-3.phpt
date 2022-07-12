--TEST--
Test hash_hkdf() function: error conditions
--FILE--
<?php

$ikm = 'input key material';

echo "\n-- Testing hash_hkdf() function with more than expected no. of arguments --\n";
var_dump(hash_hkdf('sha1', $ikm, 20, '', '', 'extra parameter'));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function hash_hkdf(): 5 at most, 6 provided in %s on line %d
 -- compile-error
