--TEST--
mysqli_stmt_prepare()
--FILE--
<?php
	mysqli_stmt_prepare();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_prepare(): 2 required, 0 provided in %s on line %d
 -- compile-error
