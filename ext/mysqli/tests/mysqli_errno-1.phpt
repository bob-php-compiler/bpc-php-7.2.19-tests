--TEST--
mysqli_errno()
--FILE--
<?php
	mysqli_errno();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_errno(): 1 required, 0 provided in %s on line %d
 -- compile-error
