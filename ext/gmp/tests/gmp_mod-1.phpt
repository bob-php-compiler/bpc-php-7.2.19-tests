--TEST--
gmp_mod tests()
--FILE--
<?php

var_dump(gmp_mod());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_mod(): 2 required, 0 provided in %s on line %d
 -- compile-error
