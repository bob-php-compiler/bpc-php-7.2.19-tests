--TEST--
gmp_scan0() basic tests
--FILE--
<?php

var_dump(gmp_scan0());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_scan0(): 2 required, 0 provided in %s on line %d
 -- compile-error
