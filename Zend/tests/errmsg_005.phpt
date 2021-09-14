--TEST--
errmsg: can't use method return value in write context
--FILE--
<?php

class test {
	function foo() {
		return "blah";
	}
}

$t = new test;
$t->foo() = 1;

echo "Done\n";
?>
--EXPECTF--
Parse error: %s in %s on line %d
