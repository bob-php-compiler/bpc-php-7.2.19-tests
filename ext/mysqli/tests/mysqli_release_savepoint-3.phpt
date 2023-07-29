--TEST--
mysqli_release_savepoint()
--FILE--
<?php
	mysqli_release_savepoint($link, 'foo', $link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_release_savepoint(): 2 at most, 3 provided in %s on line %d
 -- compile-error
