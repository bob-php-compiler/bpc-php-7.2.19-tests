--TEST--
gmp_setbit() basic tests
--FILE--
<?php

gmp_setbit($b);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_setbit(): 2 required, 1 provided in %s on line %d
 -- compile-error
