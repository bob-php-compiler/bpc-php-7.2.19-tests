--TEST--
gmp_div_q() tests
--FILE--
<?php

var_dump(gmp_div_q());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_div_q(): 2 required, 0 provided in %s on line %d
 -- compile-error
