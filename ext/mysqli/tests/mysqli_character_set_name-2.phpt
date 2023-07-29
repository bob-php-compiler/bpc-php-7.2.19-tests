--TEST--
mysqli_chararcter_set_name(), mysql_client_encoding() [alias]
--FILE--
<?php
	mysqli_character_set_name($link, $link, $link);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mysqli_character_set_name(): 1 at most, 3 provided in %s on line %d
 -- compile-error
