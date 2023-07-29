--TEST--
mysqli_thread_id()
--FILE--
<?php
	mysqli_thread_id();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_thread_id(): 1 required, 0 provided in %s on line %d
 -- compile-error
