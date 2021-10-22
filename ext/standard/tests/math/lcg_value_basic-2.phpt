--TEST--
Maths test for xapic versions of lcg_value()
--FILE--
<?php

$res = lcg_value(10,false);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function lcg_value(): 0 at most, 2 provided in %s on line %d
 -- compile-error
