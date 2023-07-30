--TEST--
mysqli_ssl_set() - test is a stub!
--FILE--
<?php
	mysqli_ssl_set($link, $link, $link, $link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_ssl_set(): 6 required, 4 provided in %s on line %d
 -- compile-error
