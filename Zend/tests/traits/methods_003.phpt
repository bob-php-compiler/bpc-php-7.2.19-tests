--TEST--
Testing __construct and __destruct with Trait
--FILE--
<?php

trait foo {
	public function __construct() {
		var_dump(__FUNCTION__);
	}
	public function __destruct() {
		var_dump(__FUNCTION__);
	}
}

class bar {
	use foo;
}

new bar;

?>
--EXPECTF--
Warning: in %s line 7: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

string(11) "__construct"
string(10) "__destruct"
