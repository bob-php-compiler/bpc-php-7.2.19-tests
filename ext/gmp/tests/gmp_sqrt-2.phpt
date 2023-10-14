--TEST--
gmp_sqrt() basic tests
--FILE--
<?php

var_dump(gmp_sqrt());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_sqrt(): 1 required, 0 provided in %s on line %d
 -- compile-error
