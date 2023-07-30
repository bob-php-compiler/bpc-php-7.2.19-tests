--TEST--
mysqli_get_server_version()
--FILE--
<?php
	mysqli_get_server_version();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_get_server_version(): 1 required, 0 provided in %s on line %d
 -- compile-error
