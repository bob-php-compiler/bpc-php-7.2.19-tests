--TEST--
gmp_clrbit() basic tests
--FILE--
<?php

gmp_clrbit($n, 3, 1);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_clrbit(): 2 at most, 3 provided in %s on line %d
 -- compile-error
