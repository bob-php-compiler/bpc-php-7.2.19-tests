--TEST--
mysqli_select_db()
--FILE--
<?php
	mysqli_select_db($link, $db, "foo");
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_select_db(): 2 at most, 3 provided in %s on line %d
 -- compile-error
