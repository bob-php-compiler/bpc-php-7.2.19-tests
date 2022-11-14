--TEST--
ZE2 Late Static Binding using static:: in functions called by non execute() calls and constructors.
--FILE--
<?php

class Foo {
	protected static $className = 'Foo';
	public static function bar() {
		echo static::$className . "::bar\n";
	}
	public function __construct() {
		echo static::$className . "::__construct\n";
	}
	public function __destruct() {
		echo static::$className . "::__destruct\n";
	}
}

class FooChild extends Foo {
	protected static $className = 'FooChild';
}

register_shutdown_function(array('Foo', 'bar'));
register_shutdown_function(array('FooChild', 'bar'));

$foo = new Foo();
$fooChild = new FooChild();
unset($foo);
unset($fooChild);

?>
--EXPECTF--
Warning: in %s line %d: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Foo::__construct
FooChild::__construct
Foo::bar
FooChild::bar
Foo::__destruct
FooChild::__destruct
