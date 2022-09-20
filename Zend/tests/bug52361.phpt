--TEST--
Bug #52361 (Throwing an exception in a destructor causes invalid catching)
--FILE--
<?php
class aaa {
	public function __destruct() {
		try {
			throw new Exception(__CLASS__);
		} catch(Exception $ex) {
			echo "1. $ex\n";
		}
	}
}
function bbb() {
	$a = new aaa();
	throw new Exception(__FUNCTION__);
}
try {
	bbb();
	echo "must be skipped !!!";
} catch(Exception $ex) {
	echo "2. $ex\n";
}
?>
--EXPECTF--
Warning: in %s line 3: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

2. Exception: bbb in %sbug52361.php:13
Stack trace:
#0 %sbug52361.php(16): bbb()
#1 {main}
1. Exception: aaa in %sbug52361.php:5
Stack trace:
#0 %sbug52361.php(21): aaa->__destruct()
#1 {main}
