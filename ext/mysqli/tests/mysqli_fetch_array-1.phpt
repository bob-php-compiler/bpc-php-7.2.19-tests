--TEST--
mysqli_fetch_array() - all datatypes but BIT
--FILE--
<?php
	mysqli_fetch_array();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_fetch_array(): 1 required, 0 provided in %s on line %d
 -- compile-error
