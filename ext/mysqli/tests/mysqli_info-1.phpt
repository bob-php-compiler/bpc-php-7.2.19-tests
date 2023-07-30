--TEST--
mysqli_info()
--FILE--
<?php
	mysqli_info();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_info(): 1 required, 0 provided in %s on line %d
 -- compile-error
