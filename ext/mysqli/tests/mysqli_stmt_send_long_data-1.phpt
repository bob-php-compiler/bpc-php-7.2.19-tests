--TEST--
mysqli_stmt_send_long_data()
--FILE--
<?php
	mysqli_stmt_send_long_data();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_send_long_data(): 3 required, 0 provided in %s on line %d
 -- compile-error
