--TEST--
get_class_methods(): Testing scope
--FILE--
<?php

interface I {
	function aa();
	function bb();
	static function cc();
}

class X {
	public function a() { }
	protected function b() { }
	private function c() { }

	static public function static_a() { }
	static protected function static_b() { }
	static private function static_c() { }
}

class Y extends X implements I {
	public function aa() { }
	public function bb() { }

	static function cc() { }

	public function __construct() {
		var_dump(get_class_methods('I'));
		var_dump(get_class_methods('Y'));
		var_dump(get_class_methods('X'));
	}

	public function __destruct() { }
}

new Y;

?>
--EXPECTF--
Warning: in %s line 31: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

array(3) {
  [0]=>
  string(2) "aa"
  [1]=>
  string(2) "bb"
  [2]=>
  string(2) "cc"
}
array(9) {
  [0]=>
  string(2) "aa"
  [1]=>
  string(2) "bb"
  [2]=>
  string(2) "cc"
  [3]=>
  string(1) "a"
  [4]=>
  string(1) "b"
  [5]=>
  string(8) "static_a"
  [6]=>
  string(8) "static_b"
  [7]=>
  string(11) "__construct"
  [8]=>
  string(10) "__destruct"
}
array(4) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "b"
  [2]=>
  string(8) "static_a"
  [3]=>
  string(8) "static_b"
}
