--TEST--
mysqli_stmt_sqlstate()
--FILE--
<?php
	mysqli_stmt_sqlstate();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_sqlstate(): 1 required, 0 provided in %s on line %d
 -- compile-error
