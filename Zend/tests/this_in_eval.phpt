--TEST--
$this in eval() block
--ARGS--
--bpc-include-file Zend/tests/this_in_eval.inc
--FILE--
<?php
class C {
	function foo() {
	    include "this_in_eval.inc";
	    include "this_in_eval.inc";
	}
}
$x = new C;
$x->foo();
--EXPECT--
object(C)#1 (0) {
}
object(C)#1 (0) {
}
