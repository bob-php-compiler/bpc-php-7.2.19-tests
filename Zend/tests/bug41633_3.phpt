--TEST--
Bug #41633.3 (Crash instantiating classes with self-referencing constants)
--FILE--
<?php
class Foo {
	const A = Foo::B;
	const B = Foo::A;
}
echo Foo::A;
?>
--EXPECTF--
Fatal error: Uncaught Error: Undefined class constant 'B' in %sbug41633_3.php:3
Stack trace:
#0 {main}
  thrown in %sbug41633_3.php on line 3
