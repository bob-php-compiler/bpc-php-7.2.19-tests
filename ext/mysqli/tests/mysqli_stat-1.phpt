--TEST--
mysqli_stat()
--FILE--
<?php
	mysqli_stat();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stat(): 1 required, 0 provided in %s on line %d
 -- compile-error
