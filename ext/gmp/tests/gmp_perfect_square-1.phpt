--TEST--
gmp_perfect_square() basic tests
--FILE--
<?php

var_dump(gmp_perfect_square());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_perfect_square(): 1 required, 0 provided in %s on line %d
 -- compile-error
