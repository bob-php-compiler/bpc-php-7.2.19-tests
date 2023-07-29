--TEST--
mysqli_stmt_prepare()
--FILE--
<?php
	mysqli_stmt_prepare($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_prepare(): 2 required, 1 provided in %s on line %d
 -- compile-error
