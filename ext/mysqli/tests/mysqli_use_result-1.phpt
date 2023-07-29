--TEST--
mysqli_use_result()
--FILE--
<?php
	mysqli_use_result();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_use_result(): 1 required, 0 provided in %s on line %d
 -- compile-error
