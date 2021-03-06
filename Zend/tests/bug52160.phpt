--TEST--
Bug #52160 (Invalid E_STRICT redefined constructor error)
--FILE--
<?php

class bar {
	function __construct() { }
	static function bar() {
		var_dump(1);
	}
}

bar::bar();

class foo {
	static function foo() {
		var_dump(2);
	}
	function __construct() { }
}

foo::foo();

class baz {
	static function baz() {
		var_dump(3);
	}
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Constructor baz::baz() cannot be static in %s on line %d
 -- compile-error
