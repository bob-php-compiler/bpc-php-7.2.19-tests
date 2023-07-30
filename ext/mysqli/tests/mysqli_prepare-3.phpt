--TEST--
mysqli_prepare()
--FILE--
<?php
	mysqli_stmt_prepare($link, 'SELECT id FROM test', 'foo');
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_stmt_prepare(): 2 at most, 3 provided in %s on line %d
 -- compile-error
