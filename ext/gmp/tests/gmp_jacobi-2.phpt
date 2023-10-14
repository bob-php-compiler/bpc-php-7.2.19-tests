--TEST--
gmp_jacobi() basic tests
--FILE--
<?php

var_dump(gmp_jacobi(array()));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_jacobi(): 2 required, 1 provided in %s on line %d
 -- compile-error
