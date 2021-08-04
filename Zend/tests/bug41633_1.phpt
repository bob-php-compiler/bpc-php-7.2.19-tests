--TEST--
Bug #41633.1 (self:: doesn't work for constants)
--FILE--
<?php
class Foo {
	const B = "ok";
	const A = self::B;
}
echo Foo::A."\n";
?>
--EXPECT--
ok
