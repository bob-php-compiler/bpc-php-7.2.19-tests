--TEST--
ZE2 Ensuring destructor visibility
--FILE--
<?php

class Base {
	private function __destruct() {
		echo __METHOD__ . "\n";
	}
}

class Derived extends Base {
}

$obj = new Derived;

?>
===DONE===
--EXPECTF--
Warning: in %s line 4: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

*** ERROR:compile-error:
Error: The magic method Base::__destruct() must have public visibility in %s on line 4
 -- compile-error
