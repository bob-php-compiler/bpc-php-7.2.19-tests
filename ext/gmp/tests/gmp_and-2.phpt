--TEST--
gmp_and() basic tests
--FILE--
<?php

var_dump(gmp_and(1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_and(): 2 required, 1 provided in %s on line %d
 -- compile-error
