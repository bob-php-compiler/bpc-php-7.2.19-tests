--TEST--
mysqli_get_server_info()
--FILE--
<?php
	mysqli_get_server_info();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_get_server_info(): 1 required, 0 provided in %s on line %d
 -- compile-error
