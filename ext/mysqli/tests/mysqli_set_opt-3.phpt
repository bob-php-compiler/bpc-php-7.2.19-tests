--TEST--
mysqli_set_opt()
--FILE--
<?php
	mysqli_set_opt($link, MYSQLI_OPT_CONNECT_TIMEOUT);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_set_opt(): 3 required, 2 provided in %s on line %d
 -- compile-error
