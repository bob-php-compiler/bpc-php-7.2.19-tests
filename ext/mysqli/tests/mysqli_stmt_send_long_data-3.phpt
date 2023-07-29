--TEST--
mysqli_stmt_send_long_data()
--FILE--
<?php
	mysqli_stmt_send_long_data($stmt, '');
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_send_long_data(): 3 required, 2 provided in %s on line %d
 -- compile-error
