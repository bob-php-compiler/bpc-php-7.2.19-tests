--TEST--
gmp_jacobi() basic tests
--FILE--
<?php

var_dump(gmp_jacobi(array(), array(), 1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_jacobi(): 2 at most, 3 provided in %s on line %d
 -- compile-error
