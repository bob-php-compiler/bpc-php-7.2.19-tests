--TEST--
mysqli_stmt_errno()
--FILE--
<?php
	mysqli_stmt_errno();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_errno(): 1 required, 0 provided in %s on line %d
 -- compile-error
