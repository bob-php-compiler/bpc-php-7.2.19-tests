--TEST--
gmp_hamdist() basic tests
--FILE--
<?php

var_dump(gmp_hamdist($n, $n1, 1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_hamdist(): 2 at most, 3 provided in %s on line %d
 -- compile-error
