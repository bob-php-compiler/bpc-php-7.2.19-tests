--TEST--
idate() and too few arguments
--FILE--
<?php
idate();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function idate(): 1 required, 0 provided in %s on line %d
 -- compile-error
