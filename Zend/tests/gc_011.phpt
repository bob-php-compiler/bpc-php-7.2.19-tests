--TEST--
GC 011: GC and destructors
--INI--
zend.enable_gc=1
--FILE--
<?php
class Foo {
	public $a;
	function __destruct() {
		echo __FUNCTION__,"\n";
	}
}
$a = new Foo();
$a->a = $a;
var_dump($a);
unset($a);
var_dump(gc_collect_cycles());
echo "ok\n"
?>
--EXPECTF--
Warning: in %s line 4: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

object(Foo)#%d (1) {
  ["a"]=>
  *RECURSION*
}
int(0)
ok
__destruct
