--TEST--
gmp_sqrt() basic tests
--FILE--
<?php

var_dump(gmp_sqrt($n, 1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_sqrt(): 1 at most, 2 provided in %s on line %d
 -- compile-error
