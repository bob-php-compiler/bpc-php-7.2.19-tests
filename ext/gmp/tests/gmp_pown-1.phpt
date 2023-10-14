--TEST--
gmp_powm() basic tests
--FILE--
<?php

var_dump(gmp_powm(array(),array()));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_powm(): 3 required, 2 provided in %s on line %d
 -- compile-error
