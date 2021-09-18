--TEST--
active_class_entry must be always correct (__METHOD__ should not depend on declaring function ce)
--FILE--
<?php

class Foo {
	public static function bar() {
		function foo() {
			var_dump(__FUNCTION__);
			var_dump(__METHOD__);
			var_dump(__CLASS__);
		}

		foo();

		var_dump(__FUNCTION__);
		var_dump(__METHOD__);
		var_dump(__CLASS__);

		return function() {var_dump(__FUNCTION__); var_dump(__METHOD__); var_dump(__CLASS__); };
	}
}

$c = Foo::bar();

$c();
?>
--EXPECTF--
string(%d) "foo"
string(%d) "foo"
string(3) "Foo"
string(3) "bar"
string(8) "Foo::bar"
string(3) "Foo"
string(9) "{closure}"
string(9) "{closure}"
string(3) "Foo"
