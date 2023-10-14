--TEST--
gmp_sign() basic tests
--FILE--
<?php

var_dump(gmp_sign($n, $n));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_sign(): 1 at most, 2 provided in %s on line %d
 -- compile-error
