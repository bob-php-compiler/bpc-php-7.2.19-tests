--TEST--
Bug #52484 (__set() ignores setting properties with empty names)
--FILE--
<?php

class A {
	function __unset($prop) {
		unset($this->$prop);
	}
}

$a = new A();
$prop = "\0";

unset($a->$prop);

?>
--EXPECTF--
Fatal error: Uncaught Error: Cannot access property started with '\0' in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
