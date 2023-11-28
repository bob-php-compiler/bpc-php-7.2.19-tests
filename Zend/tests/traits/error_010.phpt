--TEST--
Trying to exclude trait method multiple times
--FILE--
<?php

trait foo {
	public function test() { return 3; }
}
trait c {
	public function test() { return 2; }
}

class bar {
	use foo, c { c::test insteadof foo; }
	use foo, c { c::test insteadof foo; }
}

$x = new bar;
var_dump($x->test());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Trait foo duplicated in %s on line %d
 -- compile-error
