--TEST--
mysqli_query() - unicode (cyrillic)
--FILE--
<?php
	mysqli_query();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_query(): 2 required, 0 provided in %s on line %d
 -- compile-error
