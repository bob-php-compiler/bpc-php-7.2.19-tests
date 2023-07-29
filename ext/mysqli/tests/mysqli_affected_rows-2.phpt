--TEST--
mysqli_affected_rows()
--FILE--
<?php
	mysqli_affected_rows($link, $link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_affected_rows(): 1 at most, 2 provided in %s on line %d
 -- compile-error
