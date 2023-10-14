--TEST--
gmp_divexact() tests
--FILE--
<?php

var_dump(gmp_divexact(1, 1, 1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_divexact(): 2 at most, 3 provided in %s on line %d
 -- compile-error
