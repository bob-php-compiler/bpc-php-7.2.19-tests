--TEST--
mysqli_fetch_row()
--FILE--
<?php
	mysqli_fetch_row();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_fetch_row(): 1 required, 0 provided in %s on line %d
 -- compile-error
