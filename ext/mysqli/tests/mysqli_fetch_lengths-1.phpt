--TEST--
mysqli_fetch_lengths()
--FILE--
<?php
	mysqli_fetch_lengths();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_fetch_lengths(): 1 required, 0 provided in %s on line %d
 -- compile-error
