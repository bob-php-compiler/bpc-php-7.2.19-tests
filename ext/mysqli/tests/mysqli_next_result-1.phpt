--TEST--
mysqli_next_result()
--FILE--
<?php
	mysqli_next_result();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_next_result(): 1 required, 0 provided in %s on line %d
 -- compile-error
