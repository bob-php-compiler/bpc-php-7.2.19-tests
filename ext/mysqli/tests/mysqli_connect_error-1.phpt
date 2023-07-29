--TEST--
mysqli_connect_error()
--FILE--
<?php
	mysqli_connect_error($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_connect_error(): 0 at most, 1 provided in %s on line %d
 -- compile-error
