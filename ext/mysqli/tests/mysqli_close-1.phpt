--TEST--
mysqli_close()
--FILE--
<?php
	mysqli_close();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_close(): 1 required, 0 provided in %s on line %d
 -- compile-error
