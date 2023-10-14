--TEST--
gmp_sub() tests
--FILE--
<?php

var_dump(gmp_sub("", "", ""));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gmp_sub(): 2 at most, 3 provided in %s on line %d
 -- compile-error
