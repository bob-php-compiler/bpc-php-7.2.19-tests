--TEST--
gmp_scan0() basic tests
--FILE--
<?php

var_dump(gmp_scan0(array()));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_scan0(): 2 required, 1 provided in %s on line %d
 -- compile-error
