--TEST--
gmp_abs() basic tests
--FILE--
<?php

var_dump(gmp_abs());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_abs(): 1 required, 0 provided in %s on line %d
 -- compile-error
