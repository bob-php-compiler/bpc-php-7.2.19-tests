--TEST--
mysqli_report(
--FILE--
<?php
	mysqli_report();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_report(): 1 required, 0 provided in %s on line %d
 -- compile-error
