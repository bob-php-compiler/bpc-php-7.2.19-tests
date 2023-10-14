--TEST--
gmp_pow() basic tests
--FILE--
<?php

var_dump(gmp_pow(2,10,1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_pow(): 2 at most, 3 provided in %s on line %d
 -- compile-error
