--TEST--
gmp_random_range() basic tests
--FILE--
<?php

var_dump(gmp_random_range());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_random_range(): 2 required, 0 provided in %s on line %d
 -- compile-error
