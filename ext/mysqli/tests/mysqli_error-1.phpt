--TEST--
mysqli_error()
--FILE--
<?php
	mysqli_error();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_error(): 1 required, 0 provided in %s on line %d
 -- compile-error
