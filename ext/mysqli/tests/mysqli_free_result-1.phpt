--TEST--
mysqli_free_result()
--FILE--
<?php
	mysqli_free_result();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_free_result(): 1 required, 0 provided in %s on line %d
 -- compile-error
