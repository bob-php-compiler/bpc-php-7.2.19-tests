--TEST--
mysqli_query() - unicode (cyrillic)
--FILE--
<?php
	mysqli_query($link, "SELECT 1 AS колона", MYSQLI_USE_RESULT, "foo");
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_query(): 3 at most, 4 provided in %s on line %d
 -- compile-error
