--TEST--
ZE2 Ensuring destructor visibility
--FILE--
<?php

class Base {
	function __destruct() {
		echo __METHOD__ . "\n";
	}
}

class Derived extends Base {
	public function __destruct() {
		echo __METHOD__ . "\n";
	}
}

$obj = new Derived;

unset($obj); // Derived::__destruct is being called not Base::__destruct

?>
===DONE===
--EXPECTF--
Warning: in %s line 4: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 10: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

===DONE===
Derived::__destruct
