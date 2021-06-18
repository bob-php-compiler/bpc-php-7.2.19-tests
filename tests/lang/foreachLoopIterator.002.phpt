--TEST--
foreach with iterator and &$value reference
--FILE--
<?php

class MyIterator implements Iterator {
	public function valid() { return true; }
	public function next() {	}
	public function rewind() {	}
	public function current() {	}
	public function key() {	}
}

$f = new MyIterator;
echo "-----( Try to iterate with &\$value: )-----\n";
foreach ($f as $k=>&$v) {
	echo "$k => $v\n";
}

?>
--EXPECTF--
Parse error: %s in %s on line 13
