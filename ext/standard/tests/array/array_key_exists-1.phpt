--TEST--
Test array_key_exists() function
--FILE--
<?php

var_dump( array_key_exists() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_key_exists(): 2 required, 0 provided in %s on line %d
 -- compile-error
