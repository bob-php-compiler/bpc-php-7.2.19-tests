--TEST--
mysqli_ping()
--FILE--
<?php
	mysqli_ping($link, $link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_ping(): 1 at most, 2 provided in %s on line %d
 -- compile-error
