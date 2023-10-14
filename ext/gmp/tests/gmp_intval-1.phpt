--TEST--
gmp_intval() tests
--FILE--
<?php

var_dump(gmp_intval(1,1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_intval(): 1 at most, 2 provided in %s on line %d
 -- compile-error
