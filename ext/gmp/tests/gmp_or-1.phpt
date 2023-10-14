--TEST--
gmp_or() basic tests
--FILE--
<?php

var_dump(gmp_or($n, $n1, 1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_or(): 2 at most, 3 provided in %s on line %d
 -- compile-error
