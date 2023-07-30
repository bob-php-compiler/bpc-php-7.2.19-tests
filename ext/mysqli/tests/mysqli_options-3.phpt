--TEST--
mysqli_options()
--FILE--
<?php
	mysqli_options($link, MYSQLI_OPT_CONNECT_TIMEOUT);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_options(): 3 required, 2 provided in %s on line %d
 -- compile-error
