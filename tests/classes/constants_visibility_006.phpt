--TEST--
Abstract constants are not allowed
--FILE--
<?php
class A {
	abstract const X = 1;
}
?>
--EXPECTF--
Parse error: %s in %s on line 3
