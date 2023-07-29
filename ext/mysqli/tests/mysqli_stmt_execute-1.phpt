--TEST--
mysqli_stmt_execute()
--FILE--
<?php
	mysqli_stmt_execute();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_execute(): 1 required, 0 provided in %s on line %d
 -- compile-error
