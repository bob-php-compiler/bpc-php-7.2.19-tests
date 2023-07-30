--TEST--
mysqli_real_query()
--FILE--
<?php
	mysqli_real_query();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_real_query(): 2 required, 0 provided in %s on line %d
 -- compile-error
