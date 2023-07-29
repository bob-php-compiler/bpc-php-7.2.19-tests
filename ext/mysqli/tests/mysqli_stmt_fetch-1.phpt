--TEST--
mysqli_stmt_fetch()
--FILE--
<?php
	mysqli_stmt_fetch();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_fetch(): 1 required, 0 provided in %s on line %d
 -- compile-error
