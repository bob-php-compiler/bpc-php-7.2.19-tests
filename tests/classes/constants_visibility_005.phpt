--TEST--
Static constants are not allowed
--FILE--
<?php
class A {
	static const X = 1;
}
?>
--EXPECTF--
Parse error: %s in %s on line 3
