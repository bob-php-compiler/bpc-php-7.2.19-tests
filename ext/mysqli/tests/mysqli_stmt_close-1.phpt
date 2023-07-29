--TEST--
mysqli_stmt_close()
--FILE--
<?php
	mysqli_stmt_close();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_close(): 1 required, 0 provided in %s on line %d
 -- compile-error
