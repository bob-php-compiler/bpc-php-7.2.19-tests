--TEST--
Test array_key_exists() function
--FILE--
<?php

var_dump( array_key_exists(1, array(), array()) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_key_exists(): 2 at most, 3 provided in %s on line %d
 -- compile-error
