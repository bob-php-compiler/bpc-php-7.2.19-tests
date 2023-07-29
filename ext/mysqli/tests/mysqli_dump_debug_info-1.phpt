--TEST--
mysqli_dump_debug_info()
--FILE--
<?php
	mysqli_dump_debug_info();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_dump_debug_info(): 1 required, 0 provided in %s on line %d
 -- compile-error
