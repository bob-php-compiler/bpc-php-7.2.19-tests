--TEST--
Test is_infinite() - wrong params test is_infinite()
--FILE--
<?php
is_infinite();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_infinite(): 1 required, 0 provided in %s on line 2
 -- compile-error
