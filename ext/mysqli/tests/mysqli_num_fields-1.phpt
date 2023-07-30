--TEST--
mysqli_num_fields()
--FILE--
<?php
	mysqli_num_fields();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_num_fields(): 1 required, 0 provided in %s on line %d
 -- compile-error
