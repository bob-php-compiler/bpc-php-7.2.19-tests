--TEST--
mysqli_options()
--FILE--
<?php
	mysqli_options();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_options(): 3 required, 0 provided in %s on line %d
 -- compile-error
