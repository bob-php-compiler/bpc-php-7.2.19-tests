--TEST--
mysqli_autocommit()
--FILE--
<?php
	mysqli_autocommit($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_autocommit(): 2 required, 1 provided in %s on line %d
 -- compile-error
