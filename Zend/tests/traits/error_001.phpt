--TEST--
Trying to use insteadof for a method twice
--FILE--
<?php

trait foo {
	public function foo() {
		return 1;
	}
}

trait foo2 {
	public function foo() {
		return 2;
	}
}


class A {
	use foo, foo2 {
		foo2::foo insteadof foo;
		foo2::foo insteadof foo;
	}
}

?>
--EXPECTF--
Parse error: duplicated selected in %s on line %d
