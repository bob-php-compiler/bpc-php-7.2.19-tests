--TEST--
gmp_clrbit() basic tests
--FILE--
<?php

gmp_clrbit($n);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_clrbit(): 2 required, 1 provided in %s on line %d
 -- compile-error
