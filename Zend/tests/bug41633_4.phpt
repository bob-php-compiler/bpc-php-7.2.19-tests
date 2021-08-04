--TEST--
Bug #41633.4 (self:: doesn't work for constants)
--FILE--
<?php
class Foo {
	const B = "ok";
	const A = self::B;
}
var_dump(defined("Foo::A"));
?>
--EXPECT--
bool(true)
