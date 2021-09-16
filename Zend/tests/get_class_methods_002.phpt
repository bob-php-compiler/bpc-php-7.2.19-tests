--TEST--
get_class_methods(): Testing with interface
--FILE--
<?php

interface A {
	function a();
	function b();
}

class B implements A {
	public function a() { }
	public function b() { }

	public function __construct() {
		var_dump(get_class_methods('A'));
		var_dump(get_class_methods('B'));
	}

	public function __destruct() { }
}

new B;

?>
--EXPECTF--
Warning: in %s line 17: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

array(2) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "b"
}
array(4) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "b"
  [2]=>
  string(11) "__construct"
  [3]=>
  string(10) "__destruct"
}
