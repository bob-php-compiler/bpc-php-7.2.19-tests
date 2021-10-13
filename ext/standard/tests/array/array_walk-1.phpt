--TEST--
array_walk() tests
--FILE--
<?php

var_dump(array_walk());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_walk(): 2 required, 0 provided in %s on line %d
 -- compile-error
