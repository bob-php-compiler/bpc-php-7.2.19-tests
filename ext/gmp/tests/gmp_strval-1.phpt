--TEST--
gmp_strval() tests
--FILE--
<?php

var_dump(gmp_strval());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_strval(): 1 required, 0 provided in %s on line %d
 -- compile-error
