--TEST--
mysqli_connect_errno()
--FILE--
<?php
	mysqli_connect_errno($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_connect_errno(): 0 at most, 1 provided in %s on line %d
 -- compile-error
