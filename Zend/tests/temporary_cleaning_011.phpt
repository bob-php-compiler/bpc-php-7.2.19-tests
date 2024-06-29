--TEST--
Live range & lists
--FILE--
<?php
class A {
	function __destruct() {
		throw new Exception();
	}
}
$b = new A();
$x = 0;
$c = [[$x,$x]];
try {
	list($a, $b) = $c[0];
} catch (Exception $e) {
	echo "exception\n";
}
?>
--EXPECTF--
Warning: in %s line 3: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!


Fatal error: Uncaught Exception in %stemporary_cleaning_011.php:4
Stack trace:
#0 %stemporary_cleaning_011.php(15): A->__destruct()
#1 {main}
  thrown in %stemporary_cleaning_011.php on line 15
