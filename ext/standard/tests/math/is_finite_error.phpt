--TEST--
Test is_finite() - wrong params test is_finite()
--FILE--
<?php
is_finite();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_finite(): 1 required, 0 provided in %s on line 2
 -- compile-error
