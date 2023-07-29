--TEST--
mysqli_savepoint()
--FILE--
<?php
	mysqli_savepoint($link, 'foo', $link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_savepoint(): 2 at most, 3 provided in %s on line %d
 -- compile-error
