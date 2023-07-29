--TEST--
mysqli_stmt_send_long_data()
--FILE--
<?php
	mysqli_stmt_send_long_data($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_send_long_data(): 3 required, 1 provided in %s on line %d
 -- compile-error
