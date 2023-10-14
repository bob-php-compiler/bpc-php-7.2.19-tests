--TEST--
gmp_or() basic tests
--FILE--
<?php

var_dump(gmp_or(1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_or(): 2 required, 1 provided in %s on line %d
 -- compile-error
