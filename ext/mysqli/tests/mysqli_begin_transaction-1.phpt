--TEST--
mysqli_begin_transaction()
--FILE--
<?php
	mysqli_begin_transaction();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_begin_transaction(): 1 required, 0 provided in %s on line %d
 -- compile-error
