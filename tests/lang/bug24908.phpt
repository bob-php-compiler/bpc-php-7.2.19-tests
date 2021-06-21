--TEST--
Bug #24908 (super-globals can not be used in __destruct())
--INI--
variables_order=GPS
--FILE--
<?php
class test {
	function __construct() {
		if (count($_SERVER)) echo "O";
	}
	function __destruct() {
		if (count($_SERVER)) echo "K\n";
	}
}
$test = new test();
?>
--EXPECTF--
Warning: in %s line 6: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

OK
