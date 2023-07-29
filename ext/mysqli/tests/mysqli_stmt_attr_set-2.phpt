--TEST--
mysqli_stmt_attr_set() - mysqlnd does not check for invalid codes
--FILE--
<?php
	mysqli_stmt_attr_set($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_attr_set(): 3 required, 1 provided in %s on line %d
 -- compile-error
