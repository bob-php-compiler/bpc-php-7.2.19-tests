--TEST--
mysqli_stmt_result_metadata()
--FILE--
<?php
	mysqli_stmt_result_metadata();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_result_metadata(): 1 required, 0 provided in %s on line %d
 -- compile-error
