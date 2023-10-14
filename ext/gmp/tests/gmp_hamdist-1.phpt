--TEST--
gmp_hamdist() basic tests
--FILE--
<?php

var_dump(gmp_hamdist());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_hamdist(): 2 required, 0 provided in %s on line %d
 -- compile-error
