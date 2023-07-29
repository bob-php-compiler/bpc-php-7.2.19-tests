--TEST--
mysqli_stmt_store_result()
--FILE--
<?php
	mysqli_stmt_store_result();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_store_result(): 1 required, 0 provided in %s on line %d
 -- compile-error
