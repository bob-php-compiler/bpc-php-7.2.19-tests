--TEST--
mysqli_field_seek()
--FILE--
<?php
	mysqli_field_seek($res, 0, "too many");
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_field_seek(): 2 at most, 3 provided in %s on line %d
 -- compile-error
