--TEST--
mysqli_sqlstate()
--FILE--
<?php
	mysqli_sqlstate($link, "foo");
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_sqlstate(): 1 at most, 2 provided in %s on line %d
 -- compile-error
