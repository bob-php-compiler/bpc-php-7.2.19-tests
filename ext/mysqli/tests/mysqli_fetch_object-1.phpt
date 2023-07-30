--TEST--
mysqli_fetch_object()
--FILE--
<?php
	mysqli_fetch_object();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_fetch_object(): 1 required, 0 provided in %s on line %d
 -- compile-error
