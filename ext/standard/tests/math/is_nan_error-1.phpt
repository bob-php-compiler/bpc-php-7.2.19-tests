--TEST--
Test is_nan() - wrong params test is_nan()
--FILE--
<?php
is_nan(23,2,true);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_nan(): 1 at most, 3 provided in %s on line 2
 -- compile-error
