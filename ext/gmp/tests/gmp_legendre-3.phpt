--TEST--
gmp_legendre() basic tests
--FILE--
<?php

var_dump(gmp_legendre());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_legendre(): 2 required, 0 provided in %s on line %d
 -- compile-error
