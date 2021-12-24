--TEST--
Test error operation of password_hash()
--FILE--
<?php

var_dump(password_hash());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function password_hash(): 2 required, 0 provided in %s on line %d
 -- compile-error
