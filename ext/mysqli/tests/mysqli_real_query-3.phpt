--TEST--
mysqli_real_query()
--FILE--
<?php
	mysqli_real_query($link, "SELECT 1 AS a", MYSQLI_USE_RESULT, "foo");
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_real_query(): 2 at most, 4 provided in %s on line %d
 -- compile-error
