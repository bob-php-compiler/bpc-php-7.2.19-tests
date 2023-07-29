--TEST--
mysqli_affected_rows()
--FILE--
<?php
	mysqli_affected_rows();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_affected_rows(): 1 required, 0 provided in %s on line %d
 -- compile-error
