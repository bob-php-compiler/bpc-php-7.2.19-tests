--TEST--
Bug #23298 (serialize() and floats/doubles)
--INI--
serialize_precision=100
--FILE--
<?php
	ini_set('precision', 12);
	$foo = 1.428571428571428647642857142;
	$bar = unserialize(serialize($foo));
	var_dump(($foo === $bar));
?>
--EXPECT--
Warning: truncate literal float '1.428571428571428647642857142' to '1.4285714285714286', use string may avoid truncate
bool(true)
