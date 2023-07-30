--TEST--
mysqli_get_charset()
--FILE--
<?php
	mysqli_get_charset();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_get_charset(): 1 required, 0 provided in %s on line %d
 -- compile-error
