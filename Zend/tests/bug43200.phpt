--TEST--
Bug #43200 (Interface implementation / inheritance not possible in abstract classes)
--FILE--
<?php

interface a {
	function foo();
	function bar();
}
interface b {
	function foo();
}

abstract class c {
	function bar() { }
}

class x extends c implements a, b {
	function foo() { }
}

$o = new x;
var_dump($o instanceof x);
var_dump($o instanceof c);
var_dump($o instanceof a);
var_dump($o instanceof b);

?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
