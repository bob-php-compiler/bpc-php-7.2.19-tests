--TEST--
openssl key from zval leaks
--FILE--
<?php
var_dump(openssl_verify());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function openssl_verify(): 3 required, 0 provided in %s on line %d
 -- compile-error
