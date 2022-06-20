--TEST--
openssl_pkcs7_read() tests
--FILE--
<?php
var_dump(openssl_pkcs7_read());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function openssl_pkcs7_read(): 2 required, 0 provided in %s on line %d
 -- compile-error
