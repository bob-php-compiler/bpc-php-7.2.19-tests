--TEST--
mysqli_get_server_info()
--FILE--
<?php
	mysqli_get_server_info('too', 'many arguments');
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_get_server_info(): 1 at most, 2 provided in %s on line %d
 -- compile-error
