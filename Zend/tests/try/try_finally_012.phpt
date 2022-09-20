--TEST--
Try finally (exception in "return" statement)
--FILE--
<?php
class A {
	public $x = 1;
	public $y = 2;
	function __destruct() {
		throw new Exception();
	}
}
function foo() {
	foreach(new A() as $a) {
		try {
			return $a;
		} catch (Exception $e) {
			echo "exception in foo\n";
		}/* finally {
			echo "finally\n";
		}*/
	}
}
try {
	foo();
} catch (Exception $e) {
	echo "exception in main\n";
}
?>
--EXPECTF--
Warning: in %s line 5: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!


Fatal error: Uncaught Exception in %stry_finally_012.php:6
Stack trace:
#0 %stry_finally_012.php(25): A->__destruct()
#1 {main}
  thrown in %stry_finally_012.php on line 25
