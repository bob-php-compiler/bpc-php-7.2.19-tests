--TEST--
SPL: RecursiveTreeIterator and Exception from getEntry()
--INI--
error_reporting=32759
--FILE--
<?php
// E_ALL&~E_NOTICE = 32759
$ary = array(new stdClass);

class RecursiveArrayIteratorAggregated implements IteratorAggregate {
	public $it;
	function __construct($it) {
		$this->it = new RecursiveArrayIterator($it);
	}
	function getIterator() {
		return $this->it;
	}
}

$it = new RecursiveArrayIteratorAggregated($ary);
	foreach(new RecursiveTreeIterator($it) as $k => $v) {
		echo "[$k] => $v\n";
	}

?>
===DONE===
--EXPECTF--
Recoverable fatal error: Object of class stdClass could not be converted to string in %s on line %d
