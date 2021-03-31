--TEST--
idate() and too many arguments
--FILE--
<?php
idate(1,1,1);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function idate(): 2 at most, 3 provided in %s on line %d
 -- compile-error
