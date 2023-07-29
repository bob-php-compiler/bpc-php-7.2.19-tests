--TEST--
mysqli_stmt_sqlstate()
--FILE--
<?php
	mysqli_stmt_sqlstate($link, '');
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_stmt_sqlstate(): 1 at most, 2 provided in %s on line %d
 -- compile-error
