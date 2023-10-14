--TEST--
gmp_gcd() basic tests
--FILE--
<?php

var_dump(gmp_gcd($n,$n,1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_gcd(): 2 at most, 3 provided in %s on line %d
 -- compile-error
