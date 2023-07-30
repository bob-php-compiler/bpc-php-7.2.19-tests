--TEST--
mysqli_kill()
--FILE--
<?php
	mysqli_kill();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_kill(): 2 required, 0 provided in %s on line %d
 -- compile-error
