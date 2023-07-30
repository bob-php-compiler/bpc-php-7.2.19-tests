--TEST--
mysqli_select_db()
--FILE--
<?php
	mysqli_select_db($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_select_db(): 2 required, 1 provided in %s on line %d
 -- compile-error
