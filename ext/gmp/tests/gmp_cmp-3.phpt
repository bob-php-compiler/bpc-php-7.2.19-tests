--TEST--
gmp_cmp() basic tests
--FILE--
<?php

var_dump(gmp_cmp());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_cmp(): 2 required, 0 provided in %s on line %d
 -- compile-error
