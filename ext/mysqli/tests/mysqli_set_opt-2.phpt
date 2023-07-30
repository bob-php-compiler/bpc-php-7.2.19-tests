--TEST--
mysqli_set_opt()
--FILE--
<?php
	mysqli_set_opt($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_set_opt(): 3 required, 1 provided in %s on line %d
 -- compile-error
