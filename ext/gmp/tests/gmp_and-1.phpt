--TEST--
gmp_and() basic tests
--FILE--
<?php

var_dump(gmp_and($n, $n1, 1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_and(): 2 at most, 3 provided in %s on line %d
 -- compile-error
