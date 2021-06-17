--TEST--
Bug #22690 (ob_start() is broken with create_function() callbacks)
--SKIPIF--
skip no create_function()
--FILE--
<?php
	$foo = create_function('$s', 'return strtoupper($s);');
	ob_start($foo);
	echo $foo("bar\n");
?>
bar
--EXPECTF--
Deprecated: Function create_function() is deprecated in %s on line %d
BAR
BAR
