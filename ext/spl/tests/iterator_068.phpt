--TEST--
SPL: Iterator: Overloaded object and destruction
--FILE--
<?php

class Test implements Iterator {
	function foo() {
		echo __METHOD__ . "()\n";
	}
	function rewind() {}
	function valid() {}
	function current() {}
	function key() {}
	function next() {}
}

class TestIteratorIterator extends IteratorIterator {
	function __destruct() {
		echo __METHOD__ . "()\n";
		$this->foo();
	}
}

$obj = new TestIteratorIterator(new Test);
$obj->foo();
unset($obj);

?>
===DONE===
--EXPECTF--
Warning: in %s line 15: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Test::foo()
===DONE===
TestIteratorIterator::__destruct()
Test::foo()
