--TEST--
mysqli_stmt_param_count()
--FILE--
<?php
	mysqli_stmt_param_count();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_param_count(): 1 required, 0 provided in %s on line %d
 -- compile-error
