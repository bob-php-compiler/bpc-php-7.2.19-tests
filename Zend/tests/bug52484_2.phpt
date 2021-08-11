--TEST--
Bug #52484.2 (__set() ignores setting properties with empty names)
--FILE--
<?php

class A {
	function __set($prop, $val) {
		$this->$prop = $val;
	}
}

$a = new A();
$prop = "\0";

$a->$prop = 2;

?>
--EXPECTF--
Fatal error: Uncaught Error: Cannot access property started with '\0' in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
