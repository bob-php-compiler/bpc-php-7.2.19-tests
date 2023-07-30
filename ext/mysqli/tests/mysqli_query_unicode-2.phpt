--TEST--
mysqli_query() - unicode (cyrillic)
--FILE--
<?php
	mysqli_query($link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_query(): 2 required, 1 provided in %s on line %d
 -- compile-error
