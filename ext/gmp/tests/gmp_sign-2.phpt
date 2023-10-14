--TEST--
gmp_sign() basic tests
--FILE--
<?php

var_dump(gmp_sign());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_sign(): 1 required, 0 provided in %s on line %d
 -- compile-error
