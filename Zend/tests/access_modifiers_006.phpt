--TEST--
using multiple access modifiers (static methods)
--FILE--
<?php

class test {
	static static function foo() {
	}
}

echo "Done\n";
?>
--EXPECTF--
Parse error: Multiple static modifiers are not allowed in %s on line %d
