--TEST--
gmp_abs() basic tests
--FILE--
<?php

var_dump(gmp_abs(1,2));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_abs(): 1 at most, 2 provided in %s on line %d
 -- compile-error
