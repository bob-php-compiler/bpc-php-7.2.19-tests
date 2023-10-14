--TEST--
gmp_gcdext() basic tests
--FILE--
<?php

var_dump(gmp_gcdext(array()));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_gcdext(): 2 required, 1 provided in %s on line %d
 -- compile-error
