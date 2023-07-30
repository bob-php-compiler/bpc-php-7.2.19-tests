--TEST--
mysqli_field_tell()
--FILE--
<?php
	mysqli_field_tell();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_field_tell(): 1 required, 0 provided in %s on line %d
 -- compile-error
