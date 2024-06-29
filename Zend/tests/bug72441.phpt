--TEST--
Bug #72441 (Segmentation fault: RFC list_keys)
--FILE--
<?php

$array = [];

list(
	'' => $foo,
	$bar
) = $array;
?>
--EXPECTF--
Parse error: %s in %s on line %d
