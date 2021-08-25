--TEST--
Bug #70895 null ptr deref and segfault with crafted callable
--FILE--
<?php
	function m($f,$a){
		return array_map($f,0);
	}

	echo implode(m("",m("",m("",m("",m("0000000000000000000000000000000000",("")))))));
?>
--EXPECTF--
Warning: array_map() expects parameter 1 to be callable, 0000000000000000000000000000000000 given in %sbug70898.php on line %d

Warning: array_map() expects parameter 1 to be callable,  given in %sbug70898.php on line %d

Warning: array_map() expects parameter 1 to be callable,  given in %sbug70898.php on line %d

Warning: array_map() expects parameter 1 to be callable,  given in %sbug70898.php on line %d

Warning: array_map() expects parameter 1 to be callable,  given in %sbug70898.php on line %d

Warning: implode(): Argument must be an array in %sbug70898.php on line %d
