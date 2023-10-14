--TEST--
gmp_invert() basic tests
--FILE--
<?php

var_dump(gmp_invert($n1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_invert(): 2 required, 1 provided in %s on line %d
 -- compile-error
