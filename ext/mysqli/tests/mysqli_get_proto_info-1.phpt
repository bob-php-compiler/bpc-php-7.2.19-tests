--TEST--
mysqli_get_proto_info()
--FILE--
<?php
	mysqli_get_proto_info();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_get_proto_info(): 1 required, 0 provided in %s on line %d
 -- compile-error
