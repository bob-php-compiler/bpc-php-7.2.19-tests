--TEST--
gmp_pow() basic tests
--FILE--
<?php

var_dump(gmp_pow(2));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_pow(): 2 required, 1 provided in %s on line %d
 -- compile-error
