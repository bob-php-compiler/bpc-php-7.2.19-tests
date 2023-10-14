--TEST--
gmp_popcount() basic tests
--FILE--
<?php

var_dump(gmp_popcount());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_popcount(): 1 required, 0 provided in %s on line %d
 -- compile-error
