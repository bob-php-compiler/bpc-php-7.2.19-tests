--TEST--
GC 016: nested GC calls
--INI--
zend.enable_gc=1
--FILE--
<?php
class Foo {
	public $a;
	function __destruct() {
		echo "-> ";
		$a = array();
		$a[] =& $a;
		unset($a);
		var_dump(gc_collect_cycles());
	}
}
$a = new Foo();
$a->a = $a;
unset($a);
var_dump(gc_collect_cycles());
echo "ok\n"
?>
--EXPECTF--
Warning: in %s line 4: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

int(0)
ok
-> int(0)
