--TEST--
mysqli_change_user()
--FILE--
<?php
	mysqli_change_user($link, $link, $link, $link, $link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_change_user(): 4 at most, 5 provided in %s on line %d
 -- compile-error
