--TEST--
mysqli_close()
--FILE--
<?php
	mysqli_close($link, $link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_close(): 1 at most, 2 provided in %s on line %d
 -- compile-error
