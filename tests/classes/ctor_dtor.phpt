--TEST--
ZE2 The new constructor/destructor is called
--FILE--
<?php

class early {
	function __construct() {
		echo __CLASS__ . "::" . __FUNCTION__ . "\n";
	}
	function __destruct() {
		echo __CLASS__ . "::" . __FUNCTION__ . "\n";
	}
}

class late {
	function __construct() {
		echo __CLASS__ . "::" . __FUNCTION__ . "\n";
	}
	function __destruct() {
		echo __CLASS__ . "::" . __FUNCTION__ . "\n";
	}
}

$t = new early();
$t->__construct();
unset($t);
$t = new late();
//unset($t); delay to end of script

echo "Done\n";
?>
--EXPECTF--
Warning: in %s line 7: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 16: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

early::__construct
early::__construct
late::__construct
Done
early::__destruct
late::__destruct
