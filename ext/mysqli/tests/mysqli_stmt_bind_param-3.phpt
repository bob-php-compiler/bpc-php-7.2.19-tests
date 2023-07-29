--TEST--
mysqli_stmt_bind_param()
--FILE--
<?php
	mysqli_stmt_bind_param($link, $link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_stmt_bind_param(): 3 required, 2 provided in %s on line %d
 -- compile-error
