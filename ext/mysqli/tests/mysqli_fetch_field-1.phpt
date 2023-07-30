--TEST--
mysqli_fetch_field()
--FILE--
<?php
	mysqli_fetch_field();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_fetch_field(): 1 required, 0 provided in %s on line %d
 -- compile-error
