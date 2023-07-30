--TEST--
mysqli_fetch_field_direct()
--FILE--
<?php
	mysqli_fetch_field_direct();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_fetch_field_direct(): 2 required, 0 provided in %s on line %d
 -- compile-error
