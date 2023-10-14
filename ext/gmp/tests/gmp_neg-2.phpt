--TEST--
gmp_neg() basic tests
--FILE--
<?php

var_dump(gmp_neg());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_neg(): 1 required, 0 provided in %s on line %d
 -- compile-error
