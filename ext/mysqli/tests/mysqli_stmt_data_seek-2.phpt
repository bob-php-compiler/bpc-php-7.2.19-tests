--TEST--
mysqli_stmt_data_seek()
--FILE--
<?php
	mysqli_stmt_data_seek($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_data_seek(): 2 required, 1 provided in %s on line %d
 -- compile-error
