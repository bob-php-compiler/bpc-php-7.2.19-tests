--TEST--
Bug #27822 (is_resource() returns TRUE for closed resources)
--FILE--
<?php
	$f = fopen('/proc/self/comm', 'r');
	fclose($f);
	var_dump(is_resource($f));
?>
--EXPECT--
bool(false)
