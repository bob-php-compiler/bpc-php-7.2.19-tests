--TEST--
Bug #39346 (Unsetting a static variable inside a destructor causes segfault later on)
--FILE--
<?php
class test
{
	protected $_id;
	static $instances;

	public function __construct($id) {
		$this->_id = $id;
		self::$instances[$this->_id] = $this;
	}

	function __destruct() {
		unset(self::$instances[$this->_id]);
	}
}
$test = new test(2);
$test = new test(1);
$test = new test(2);
$test = new test(3);
echo "ok\n";
?>
--EXPECTF--
Warning: in %s line 12: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

ok
