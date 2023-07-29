--TEST--
mysqli_chararcter_set_name(), mysql_client_encoding() [alias]
--FILE--
<?php
	mysqli_character_set_name();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mysqli_character_set_name(): 1 required, 0 provided in %s on line %d
 -- compile-error
