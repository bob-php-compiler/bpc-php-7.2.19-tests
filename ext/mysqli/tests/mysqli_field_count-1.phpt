--TEST--
mysqli_field_count()
--FILE--
<?php
	mysqli_field_count();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_field_count(): 1 required, 0 provided in %s on line %d
 -- compile-error
