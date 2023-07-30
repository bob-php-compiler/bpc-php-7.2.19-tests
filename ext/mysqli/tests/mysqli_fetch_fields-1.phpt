--TEST--
mysqli_fetch_fields()
--FILE--
<?php
	mysqli_fetch_fields();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_fetch_fields(): 1 required, 0 provided in %s on line %d
 -- compile-error
