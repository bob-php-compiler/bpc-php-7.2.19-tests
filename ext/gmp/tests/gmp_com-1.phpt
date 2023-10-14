--TEST--
gmp_com() basic tests
--FILE--
<?php

var_dump(gmp_strval(gmp_com()));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_com(): 1 required, 0 provided in %s on line %d
 -- compile-error
