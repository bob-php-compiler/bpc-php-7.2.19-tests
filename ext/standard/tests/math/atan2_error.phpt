--TEST--
Test atan2() - wrong params atan2()
--FILE--
<?php
atan2();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function atan2(): 2 required, 0 provided in %s on line %d
 -- compile-error
