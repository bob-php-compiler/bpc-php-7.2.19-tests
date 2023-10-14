--TEST--
gmp_divexact() tests
--FILE--
<?php

var_dump(gmp_divexact());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_divexact(): 2 required, 0 provided in %s on line %d
 -- compile-error
