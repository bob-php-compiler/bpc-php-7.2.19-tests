--TEST--
Bug #70805 (Segmentation faults whilst running Drupal 8 test suite) (Memleak)
--INI--
zend.enable_gc = 1
--FILE--
<?php
class A {
}

class B {
}

class C {
	public function __destruct() {
		if (isset($GLOBALS["a"])) {
			unset($GLOBALS["a"]);
		}
	}
}

$a = new A;
$a->b = new B;
$a->b->a = $a;

$i = 0;

while ($i++ < 9999) {
	$t = array();
	$t[] = &$t;
	unset($t);
}
$t = array(new C);
$t[] = &$t;
unset($t);

unset($a);
var_dump(gc_collect_cycles());
--EXPECTF--
Warning: in %s line 9: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

int(0)
