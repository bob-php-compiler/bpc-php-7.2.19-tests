--TEST--
mysqli_stmt_init()
--FILE--
<?php
	mysqli_stmt_init();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_init(): 1 required, 0 provided in %s on line %d
 -- compile-error
