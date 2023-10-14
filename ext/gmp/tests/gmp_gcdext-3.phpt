--TEST--
gmp_gcdext() basic tests
--FILE--
<?php

var_dump(gmp_gcdext());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_gcdext(): 2 required, 0 provided in %s on line %d
 -- compile-error
