--TEST--
array_walk_recursive() tests
--FILE--
<?php

var_dump(array_walk_recursive());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_walk_recursive(): 2 required, 0 provided in %s on line %d
 -- compile-error
