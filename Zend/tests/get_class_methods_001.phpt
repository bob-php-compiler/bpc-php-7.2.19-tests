--TEST--
get_class_methods(): Testing scope
--FILE--
<?php

abstract class X {
	public function a() { }
	private function b() { }
	protected function c() { }
}

class Y extends X {
	private function bb() { }

	static public function test() {
		var_dump(get_class_methods('X'));
		var_dump(get_class_methods('Y'));
	}
}


var_dump(get_class_methods('X'));
var_dump(get_class_methods('Y'));


Y::test();

?>
--EXPECTF--
array(1) {
  [0]=>
  string(1) "a"
}
array(2) {
  [0]=>
  string(1) "a"
  [1]=>
  string(4) "test"
}
array(2) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "c"
}
array(4) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "c"
  [2]=>
  string(2) "bb"
  [3]=>
  string(4) "test"
}
