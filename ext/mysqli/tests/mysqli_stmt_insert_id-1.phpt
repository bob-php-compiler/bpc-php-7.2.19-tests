--TEST--
mysqli_stmt_insert_id()
--FILE--
<?php
	mysqli_stmt_insert_id();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_insert_id(): 1 required, 0 provided in %s on line %d
 -- compile-error
