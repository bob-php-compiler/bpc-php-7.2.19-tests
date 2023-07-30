--TEST--
mysqli_select_db()
--FILE--
<?php
	mysqli_select_db();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_select_db(): 2 required, 0 provided in %s on line %d
 -- compile-error
