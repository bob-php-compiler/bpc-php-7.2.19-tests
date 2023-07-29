--TEST--
mysqli_savepoint()
--FILE--
<?php
	mysqli_savepoint();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_savepoint(): 2 required, 0 provided in %s on line %d
 -- compile-error
