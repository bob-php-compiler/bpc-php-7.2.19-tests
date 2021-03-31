--TEST--
checkdate() and too few arguments
--FILE--
<?php
checkdate();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function checkdate(): 3 required, 0 provided in %s on line %d
 -- compile-error
