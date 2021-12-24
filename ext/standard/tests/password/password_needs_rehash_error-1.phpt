--TEST--
Test error operation of password_needs_rehash()
--FILE--
<?php

var_dump(password_needs_rehash());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function password_needs_rehash(): 2 required, 0 provided in %s on line %d
 -- compile-error
