--TEST--
gmp_legendre() basic tests
--FILE--
<?php

var_dump(gmp_legendre(array(), array(), 1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_legendre(): 2 at most, 3 provided in %s on line %d
 -- compile-error
