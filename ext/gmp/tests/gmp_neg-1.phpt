--TEST--
gmp_neg() basic tests
--FILE--
<?php

var_dump(gmp_neg(1,1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_neg(): 1 at most, 2 provided in %s on line %d
 -- compile-error
