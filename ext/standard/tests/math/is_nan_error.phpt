--TEST--
Test is_nan() - wrong params test is_nan()
--FILE--
<?php
is_nan();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_nan(): 1 required, 0 provided in %s on line 2
 -- compile-error
