--TEST--
Test atan2() - wrong params atan2()
--FILE--
<?php
atan2(36,25,0);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function atan2(): 2 at most, 3 provided in %s on line %d
 -- compile-error
