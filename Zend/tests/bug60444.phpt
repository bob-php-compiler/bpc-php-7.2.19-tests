--TEST--
Bug #60444 (Segmentation fault with include & class extending)
--ARGS--
--bpc-include-file Zend/tests/bug60444.inc
--FILE--
<?php
class Foo {
	public function __construct() {
		require_once "bug60444.inc";
		Some::foo($this);
	}
}
class Some {
	public static function foo(Foo $foo) {
	}
}
new Foo;
echo "done\n";
--EXPECT--
done
