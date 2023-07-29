--TEST--
mysqli_rollback()
--FILE--
<?php
	mysqli_rollback();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_rollback(): 1 required, 0 provided in %s on line %d
 -- compile-error
