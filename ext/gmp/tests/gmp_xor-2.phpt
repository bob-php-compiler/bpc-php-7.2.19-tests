--TEST--
gmp_xor() basic tests
--FILE--
<?php

var_dump(gmp_xor(1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_xor(): 2 required, 1 provided in %s on line %d
 -- compile-error
