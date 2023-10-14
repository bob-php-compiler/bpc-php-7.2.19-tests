--TEST--
gmp_cmp() basic tests
--FILE--
<?php

var_dump(gmp_cmp(array()));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_cmp(): 2 required, 1 provided in %s on line %d
 -- compile-error
