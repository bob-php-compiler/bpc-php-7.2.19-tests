--TEST--
mysqli_change_user()
--FILE--
<?php
	mysqli_change_user($link, $link, $link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_change_user(): 4 required, 3 provided in %s on line %d
 -- compile-error
