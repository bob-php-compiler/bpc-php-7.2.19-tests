--TEST--
Test error operation of password_verify()
--FILE--
<?php

var_dump(password_verify());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function password_verify(): 2 required, 0 provided in %s on line %d
 -- compile-error
