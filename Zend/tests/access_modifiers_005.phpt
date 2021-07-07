--TEST--
using multiple access modifiers (final methods)
--FILE--
<?php

class test {
	final final function foo() {
	}
}

echo "Done\n";
?>
--EXPECTF--
Parse error: Multiple final modifiers are not allowed in %s on line %d
