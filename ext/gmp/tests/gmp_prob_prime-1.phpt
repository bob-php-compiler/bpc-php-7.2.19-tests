--TEST--
gmp_prob_prime() basic tests
--FILE--
<?php

var_dump(gmp_prob_prime());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_prob_prime(): 1 required, 0 provided in %s on line %d
 -- compile-error
