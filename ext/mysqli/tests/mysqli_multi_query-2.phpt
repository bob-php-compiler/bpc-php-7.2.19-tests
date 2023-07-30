--TEST--
mysqli_multi_query()
--FILE--
<?php
	mysqli_multi_query($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_multi_query(): 2 required, 1 provided in %s on line %d
 -- compile-error
