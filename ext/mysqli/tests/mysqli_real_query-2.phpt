--TEST--
mysqli_real_query()
--FILE--
<?php
	mysqli_real_query($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_real_query(): 2 required, 1 provided in %s on line %d
 -- compile-error
