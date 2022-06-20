--TEST--
openssl key from zval leaks
--FILE--
<?php
var_dump(openssl_x509_parse());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function openssl_x509_parse(): 1 required, 0 provided in %s on line %d
 -- compile-error
