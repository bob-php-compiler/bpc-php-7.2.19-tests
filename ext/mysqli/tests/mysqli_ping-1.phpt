--TEST--
mysqli_ping()
--FILE--
<?php
	mysqli_ping();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_ping(): 1 required, 0 provided in %s on line %d
 -- compile-error
