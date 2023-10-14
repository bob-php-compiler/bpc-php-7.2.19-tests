--TEST--
gmp_div_r() tests
--FILE--
<?php

var_dump(gmp_div_r());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_div_r(): 2 required, 0 provided in %s on line %d
 -- compile-error
