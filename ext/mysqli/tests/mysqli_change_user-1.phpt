--TEST--
mysqli_change_user()
--FILE--
<?php
	mysqli_change_user();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_change_user(): 4 required, 0 provided in %s on line %d
 -- compile-error
