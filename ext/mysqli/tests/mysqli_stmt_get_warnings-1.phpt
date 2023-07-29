--TEST--
mysqli_stmt_get_warnings()
--FILE--
<?php
	mysqli_stmt_get_warnings();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_get_warnings(): 1 required, 0 provided in %s on line %d
 -- compile-error
