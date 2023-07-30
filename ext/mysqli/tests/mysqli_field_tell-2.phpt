--TEST--
mysqli_field_tell()
--FILE--
<?php
	mysqli_field_tell($res, 'too many arguments');
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_field_tell(): 1 at most, 2 provided in %s on line %d
 -- compile-error
