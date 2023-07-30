--TEST--
mysqli_fetch_assoc()
--FILE--
<?php
	mysqli_fetch_assoc();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_fetch_assoc(): 1 required, 0 provided in %s on line %d
 -- compile-error
