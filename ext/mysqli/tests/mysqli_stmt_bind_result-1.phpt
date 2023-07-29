--TEST--
mysqli_stmt_bind_result()
--FILE--
<?php
	mysqli_stmt_bind_result();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_bind_result(): 2 required, 0 provided in %s on line %d
 -- compile-error
