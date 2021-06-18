--TEST--
Duplicate of zend test tests/classes/iterators_002.phpt without expected output from destructor
--FILE--
<?php
class c_iter implements Iterator {

	private $obj;
	private $num = 0;

	function __construct($obj) {
		echo __METHOD__ . "\n";
		$this->obj = $obj;
	}
	function rewind() {
		echo __METHOD__ . "\n";
		$this->num = 0;
	}
	function valid() {
		$more = $this->num < $this->obj->max;
		echo __METHOD__ . ' = ' .($more ? 'true' : 'false') . "\n";
		return $more;
	}
	function current() {
		echo __METHOD__ . "\n";
		return $this->num;
	}
	function next() {
		echo __METHOD__ . "\n";
		$this->num++;
	}
	function key() {
		echo __METHOD__ . "\n";
		switch($this->num) {
			case 0: return "1st";
			case 1: return "2nd";
			case 2: return "3rd";
			default: return "???";
		}
	}
	function __destruct() {
	}
}

class c implements IteratorAggregate {

	public $max = 3;

	function getIterator() {
		echo __METHOD__ . "\n";
		return new c_iter($this);
	}
	function __destruct() {
	}
}

$t = new c();

foreach($t as $k => $v) {
	foreach($t as $w) {
		echo "double:$v:$w\n";
		break;
	}
}

unset($t);

?>
===DONE===
--EXPECTF--
Warning: in %s line 37: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 49: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

c::getIterator
c_iter::__construct
c_iter::rewind
c_iter::valid = true
c_iter::current
c_iter::key
c::getIterator
c_iter::__construct
c_iter::rewind
c_iter::valid = true
c_iter::current
double:0:0
c_iter::next
c_iter::valid = true
c_iter::current
c_iter::key
c::getIterator
c_iter::__construct
c_iter::rewind
c_iter::valid = true
c_iter::current
double:1:0
c_iter::next
c_iter::valid = true
c_iter::current
c_iter::key
c::getIterator
c_iter::__construct
c_iter::rewind
c_iter::valid = true
c_iter::current
double:2:0
c_iter::next
c_iter::valid = false
===DONE===
