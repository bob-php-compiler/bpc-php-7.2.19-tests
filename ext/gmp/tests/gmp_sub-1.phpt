--TEST--
gmp_sub() tests
--FILE--
<?php

var_dump(gmp_sub());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_sub(): 2 required, 0 provided in %s on line %d
 -- compile-error
