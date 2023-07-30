--TEST--
mysqli_field_seek()
--FILE--
<?php
	mysqli_field_seek();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_field_seek(): 2 required, 0 provided in %s on line %d
 -- compile-error
