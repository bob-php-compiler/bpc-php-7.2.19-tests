--TEST--
mysqli_stmt_attr_get()
--FILE--
<?php
	mysqli_stmt_attr_get();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_attr_get(): 2 required, 0 provided in %s on line %d
 -- compile-error
