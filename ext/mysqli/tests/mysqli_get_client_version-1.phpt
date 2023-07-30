--TEST--
mysqli_get_client_version()
--FILE--
<?php
	mysqli_get_client_version($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_get_client_version(): 0 at most, 1 provided in %s on line %d
 -- compile-error
