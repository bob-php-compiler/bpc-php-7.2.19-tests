--TEST--
mysqli_options()
--FILE--
<?php
	mysqli_options($link, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT=0', 'foo');
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_options(): 3 at most, 4 provided in %s on line %d
 -- compile-error
