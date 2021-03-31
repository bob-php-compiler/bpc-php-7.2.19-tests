--TEST--
getdate() and too many arguments
--FILE--
<?php
getdate(1,1);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function getdate(): 1 at most, 2 provided in %s on line %d
 -- compile-error
