--TEST--
gmp_random_range() basic tests
--FILE--
<?php

var_dump(gmp_random_range(10));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_random_range(): 2 required, 1 provided in %s on line %d
 -- compile-error
