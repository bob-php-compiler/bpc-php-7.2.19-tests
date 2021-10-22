--TEST--
Test is_finite() - wrong params test is_finite()
--FILE--
<?php
is_finite(23,2,true);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_finite(): 1 at most, 3 provided in %s on line 2
 -- compile-error
