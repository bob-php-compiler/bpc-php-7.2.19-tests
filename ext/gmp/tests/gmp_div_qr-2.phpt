--TEST--
gmp_div_qr() tests
--FILE--
<?php

var_dump(gmp_div_qr(""));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_div_qr(): 2 required, 1 provided in %s on line %d
 -- compile-error
