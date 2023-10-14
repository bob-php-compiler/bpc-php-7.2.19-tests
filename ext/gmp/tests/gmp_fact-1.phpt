--TEST--
gmp_fact() basic tests
--FILE--
<?php

var_dump(gmp_fact());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_fact(): 1 required, 0 provided in %s on line %d
 -- compile-error
