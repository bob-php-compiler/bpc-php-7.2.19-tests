--TEST--
mysqli get_client_info
--FILE--
<?php
	$s = mysqli_get_client_info();
	echo gettype($s);
?>
--EXPECTF--
string
