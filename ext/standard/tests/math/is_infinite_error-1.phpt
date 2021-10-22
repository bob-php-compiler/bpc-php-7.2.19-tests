--TEST--
Test is_infinite() - wrong params test is_infinite()
--FILE--
<?php
is_infinite(23,2,true);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_infinite(): 1 at most, 3 provided in %s on line 2
 -- compile-error
