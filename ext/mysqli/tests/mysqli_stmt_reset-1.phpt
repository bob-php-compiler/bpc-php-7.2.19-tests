--TEST--
mysqli_stmt_reset()
--FILE--
<?php
	mysqli_stmt_reset();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_reset(): 1 required, 0 provided in %s on line %d
 -- compile-error
