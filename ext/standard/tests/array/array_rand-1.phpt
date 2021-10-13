--TEST--
array_rand() tests
--FILE--
<?php

var_dump(array_rand());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_rand(): 1 required, 0 provided in %s on line %d
 -- compile-error
