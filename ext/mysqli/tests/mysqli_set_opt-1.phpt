--TEST--
mysqli_set_opt()
--FILE--
<?php
	mysqli_set_opt();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_set_opt(): 3 required, 0 provided in %s on line %d
 -- compile-error
