--TEST--
mysqli_thread_safe()
--FILE--
<?php
	mysqli_thread_safe($link);;
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_thread_safe(): 0 at most, 1 provided in %s on line %d
 -- compile-error
