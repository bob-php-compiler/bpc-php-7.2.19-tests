--TEST--
mysqli_stmt_num_rows()
--FILE--
<?php
	mysqli_stmt_num_rows();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_num_rows(): 1 required, 0 provided in %s on line %d
 -- compile-error
