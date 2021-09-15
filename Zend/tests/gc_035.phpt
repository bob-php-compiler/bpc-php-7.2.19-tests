--TEST--
GC 035: Lost inner-cycles garbage
--INI--
zend.enable_gc = 1
--FILE--
<?php
class A {
	public $a;
	public $x;
	function __destruct() {
		unset($this->x);
	}
}
$a = new A;
$a->a = $a;
$a->x = array();
$a->x[] =& $a->x;
$a->x[] = $a;
var_dump(gc_collect_cycles());
unset($a);
var_dump(gc_collect_cycles());
var_dump(gc_collect_cycles());
--EXPECTF--
Warning: in %s line 5: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

int(0)
int(0)
int(0)
