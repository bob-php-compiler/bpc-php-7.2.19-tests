--TEST--
rand() and mt_rand() tests
--FILE--
<?php

var_dump(mt_getrandmax(1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mt_getrandmax(): 0 at most, 1 provided in %s on line %d
 -- compile-error
