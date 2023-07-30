--TEST--
mysqli_fetch_field_direct()
--FILE--
<?php
	mysqli_fetch_field_direct($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_fetch_field_direct(): 2 required, 1 provided in %s on line %d
 -- compile-error
