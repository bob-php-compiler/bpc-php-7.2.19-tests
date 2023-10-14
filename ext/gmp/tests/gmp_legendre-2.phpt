--TEST--
gmp_legendre() basic tests
--FILE--
<?php

var_dump(gmp_legendre(array()));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_legendre(): 2 required, 1 provided in %s on line %d
 -- compile-error
