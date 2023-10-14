--TEST--
gmp_init() basic tests
--FILE--
<?php

var_dump(gmp_init(1,2,3,4));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_init(): 2 at most, 4 provided in %s on line %d
 -- compile-error
