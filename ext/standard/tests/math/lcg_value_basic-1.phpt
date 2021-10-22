--TEST--
Maths test for xapic versions of lcg_value()
--FILE--
<?php

$res = lcg_value(23);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function lcg_value(): 0 at most, 1 provided in %s on line %d
 -- compile-error
