--TEST--
errmsg: can't use function return value in write context
--FILE--
<?php

function foo() {
	return "blah";
}

foo() = 1;

echo "Done\n";
?>
--EXPECTF--
Parse error: %s in %s on line %d
