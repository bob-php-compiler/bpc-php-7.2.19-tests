--TEST--
Bug #70179 ($this refcount issue)
--FILE--
<?php

class X {
	function __invoke() {
		var_dump($this);
	}
}

$o = new X;
$o();

?>
--EXPECT--
object(X)#1 (0) {
}
