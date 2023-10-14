--TEST--
gmp_init() basic tests
--FILE--
<?php

var_dump(gmp_init());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_init(): 1 required, 0 provided in %s on line %d
 -- compile-error
