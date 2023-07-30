--TEST--
mysqli_real_escape_string()
--FILE--
<?php
	mysqli_real_escape_string($link, "фуу", "бар");
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_real_escape_string(): 2 at most, 3 provided in %s on line %d
 -- compile-error
