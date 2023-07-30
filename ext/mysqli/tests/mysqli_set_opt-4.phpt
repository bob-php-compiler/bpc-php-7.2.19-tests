--TEST--
mysqli_set_opt()
--FILE--
<?php
	mysqli_set_opt($link, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT=0', 'foo');
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_set_opt(): 3 at most, 4 provided in %s on line %d
 -- compile-error
