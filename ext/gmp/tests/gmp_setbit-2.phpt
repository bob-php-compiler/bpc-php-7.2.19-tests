--TEST--
gmp_setbit() basic tests
--FILE--
<?php

gmp_setbit($b, 23,1,1);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_setbit(): 3 at most, 4 provided in %s on line %d
 -- compile-error
