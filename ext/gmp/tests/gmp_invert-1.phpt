--TEST--
gmp_invert() basic tests
--FILE--
<?php

var_dump(gmp_invert($n1, $n, 10));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_invert(): 2 at most, 3 provided in %s on line %d
 -- compile-error
