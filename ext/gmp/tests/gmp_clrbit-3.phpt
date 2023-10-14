--TEST--
gmp_clrbit() basic tests
--FILE--
<?php

gmp_clrbit();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_clrbit(): 2 required, 0 provided in %s on line %d
 -- compile-error
