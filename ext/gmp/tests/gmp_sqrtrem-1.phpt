--TEST--
gmp_sqrtrem() basic tests
--FILE--
<?php

var_dump(gmp_sqrtrem());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_sqrtrem(): 1 required, 0 provided in %s on line %d
 -- compile-error
