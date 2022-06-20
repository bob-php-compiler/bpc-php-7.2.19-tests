--TEST--
openssl_x509_fingerprint() tests
--FILE--
<?php

echo "** Testing with no parameters **\n";
var_dump(openssl_x509_fingerprint());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function openssl_x509_fingerprint(): 1 required, 0 provided in %s on line %d
 -- compile-error
