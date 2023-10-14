--TEST--
gmp_powm() basic tests
--FILE--
<?php

var_dump(gmp_powm(array()));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_powm(): 3 required, 1 provided in %s on line %d
 -- compile-error
