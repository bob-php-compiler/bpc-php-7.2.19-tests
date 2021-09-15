--TEST--
GC 029: GC and destructors
--SKIPIF--
<?php if (PHP_ZTS) { print "skip only for no-zts build"; }
--INI--
zend.enable_gc=1
--FILE--
<?php
class Foo {
	public $bar;
	public $x = array(1,2,3);
	function __destruct() {
		if ($this->bar !== null) {
			$this->x = null;
			unset($this->bar);
		}
	}
}
class Bar {
	public $foo;
        function __destruct() {
                if ($this->foo !== null) {
                        unset($this->foo);
                }
        }

}
$foo = new Foo();
$bar = new Bar();
$foo->bar = $bar;
$bar->foo = $foo;
unset($foo);
unset($bar);
var_dump(gc_collect_cycles());
?>
--EXPECTF--
Warning: in %s line 5: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 14: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

int(0)
