--TEST--
gmp_root() basic tests
--FILE--
<?php

var_dump(gmp_root());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_root(): 2 required, 0 provided in %s on line %d
 -- compile-error
