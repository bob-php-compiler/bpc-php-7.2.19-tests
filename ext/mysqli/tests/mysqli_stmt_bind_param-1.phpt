--TEST--
mysqli_stmt_bind_param()
--FILE--
<?php
	mysqli_stmt_bind_param();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_bind_param(): 3 required, 0 provided in %s on line %d
 -- compile-error
