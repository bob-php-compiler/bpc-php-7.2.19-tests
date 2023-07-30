--TEST--
mysqli_real_escape_string()
--FILE--
<?php
	mysqli_real_escape_string($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_real_escape_string(): 2 required, 1 provided in %s on line %d
 -- compile-error
