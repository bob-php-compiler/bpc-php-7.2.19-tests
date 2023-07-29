--TEST--
mysqli_stmt_bind_result()
--FILE--
<?php
	mysqli_stmt_bind_result($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_bind_result(): 2 required, 1 provided in %s on line %d
 -- compile-error
