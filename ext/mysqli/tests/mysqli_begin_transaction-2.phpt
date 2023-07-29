--TEST--
mysqli_begin_transaction()
--FILE--
<?php
	mysqli_begin_transaction($link, 0, "mytrx", $link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_begin_transaction(): 3 at most, 4 provided in %s on line %d
 -- compile-error
