--TEST--
gmp_cmp() basic tests
--FILE--
<?php

var_dump(gmp_cmp($n1,$n,1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_cmp(): 2 at most, 3 provided in %s on line %d
 -- compile-error
