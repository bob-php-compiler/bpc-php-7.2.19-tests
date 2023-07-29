--TEST--
mysqli_autocommit()
--FILE--
<?php
	mysqli_autocommit($link, $link, $link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_autocommit(): 2 at most, 3 provided in %s on line %d
 -- compile-error
