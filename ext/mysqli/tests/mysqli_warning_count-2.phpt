--TEST--
mysqli_warning_count()
--FILE--
<?php
	mysqli_warning_count($link, "too_many");
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_warning_count(): 1 at most, 2 provided in %s on line %d
 -- compile-error
