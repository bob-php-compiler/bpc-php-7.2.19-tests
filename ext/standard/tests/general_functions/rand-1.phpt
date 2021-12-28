--TEST--
rand() and mt_rand() tests
--FILE--
<?php

var_dump(getrandmax(1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function getrandmax(): 0 at most, 1 provided in %s on line %d
 -- compile-error
