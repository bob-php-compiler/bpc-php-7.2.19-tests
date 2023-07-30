--TEST--
mysqli_set_charset()
--FILE--
<?php
	mysqli_set_charset();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_set_charset(): 2 required, 0 provided in %s on line %d
 -- compile-error
