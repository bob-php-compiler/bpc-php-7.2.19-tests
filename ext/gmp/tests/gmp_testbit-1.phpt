--TEST--
gmp_testbit() basic tests
--FILE--
<?php

var_dump(gmp_testbit());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_testbit(): 2 required, 0 provided in %s on line %d
 -- compile-error
