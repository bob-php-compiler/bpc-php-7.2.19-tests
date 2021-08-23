--TEST--
Bug #69446 (GC leak relating to removal of nested data after dtors run)
--INI--
zend.enable_gc = 1
--FILE--
<?php
$bar = NULL;
class bad
{
	public $_private = array();

	public function __construct()
	{
		$this->_private[] = 'php';
	}

	public function __destruct()
	{
		global $bar;
		$bar = $this;
		var_dump($bar);
	}
}

$foo = new stdclass;
$foo->foo = $foo;
$foo->bad = new bad;

unserialize(serialize($foo));
//unset($foo);

gc_collect_cycles();
var_dump($bar);
--EXPECTF--
Warning: in %s line 12: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

NULL
object(bad)#2 (1) {
  ["_private"]=>
  array(1) {
    [0]=>
    string(3) "php"
  }
}
object(bad)#4 (1) {
  ["_private"]=>
  array(1) {
    [0]=>
    string(3) "php"
  }
}
