--TEST--
mysqli_commit()
--FILE--
<?php
	mysqli_commit();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_commit(): 1 required, 0 provided in %s on line %d
 -- compile-error
