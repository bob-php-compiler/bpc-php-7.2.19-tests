--TEST--
gmp_random_bits() basic tests
--FILE--
<?php

var_dump(gmp_random_bits());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_random_bits(): 1 required, 0 provided in %s on line %d
 -- compile-error
