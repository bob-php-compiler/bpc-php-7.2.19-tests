--TEST--
mysqli_stat()
--FILE--
<?php
	mysqli_stat($link, "foo");
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_stat(): 1 at most, 2 provided in %s on line %d
 -- compile-error
