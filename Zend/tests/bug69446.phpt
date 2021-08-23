--TEST--
Bug #69446 (GC leak relating to removal of nested data after dtors run)
--INI--
zend.enable_gc = 1
--FILE--
<?php
$bar = NULL;
class bad {
	public function __destruct() {
		global $bar;
		$bar = $this;
		$bar->y = new stdClass;
		var_dump($bar);
	}
}

$foo = new stdClass;
$foo->foo = $foo;
$foo->bad = new bad;
$foo->bad->x = new stdClass;

unset($foo);
gc_collect_cycles();
var_dump($bar);
--EXPECTF--
Warning: in %s line 4: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

NULL
object(bad)#2 (2) {
  ["x"]=>
  object(stdClass)#3 (0) {
  }
  ["y"]=>
  object(stdClass)#4 (0) {
  }
}
