--TEST--
mysqli_multi_query()
--FILE--
<?php
	mysqli_multi_query();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_multi_query(): 2 required, 0 provided in %s on line %d
 -- compile-error
