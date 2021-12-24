--TEST--
Test error operation of password_verify()
--FILE--
<?php

var_dump(password_verify("foo"));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function password_verify(): 2 required, 1 provided in %s on line %d
 -- compile-error
