--TEST--
using multiple access modifiers (abstract methods)
--FILE--
<?php

class test {
	abstract abstract function foo() {
	}
}

echo "Done\n";
?>
--EXPECTF--
Parse error: Multiple abstract modifiers are not allowed in %s on line %d
