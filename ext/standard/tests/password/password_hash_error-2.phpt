--TEST--
Test error operation of password_hash()
--FILE--
<?php

var_dump(password_hash("foo"));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function password_hash(): 2 required, 1 provided in %s on line %d
 -- compile-error
