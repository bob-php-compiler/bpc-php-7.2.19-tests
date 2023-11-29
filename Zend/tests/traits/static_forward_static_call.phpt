--TEST--
Traits and forward_static_call().
--CREDITS--
Simas Toleikis simast@gmail.com
--SKIPIF--
skip TODO forward_static_call
--FILE--
<?php

	trait TestTrait {
		public static function test() {
			return 'Forwarded '.forward_static_call(array('A', 'test'));
		}
	}

	class A {
		public static function test() {
			return "Test A";
		}
	}

	class B extends A {
		use TestTrait;
	}

	echo B::test();

?>
--EXPECT--
Forwarded Test A
