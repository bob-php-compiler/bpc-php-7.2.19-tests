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
try{
	$a = 0;
	switch ($a) {
		case 0:
	}
	switch ($a) {
		case 0:
	}
	switch ($a) {
		case 0:
	}
	foreach(array(new stdClass()) as $x) {
		foreach(new A() as $a) {
			foreach(array(new stdClass()) as $y) {
				try {
					if (0) { echo "0" . (int)5; }
					return $a;
				} catch (Exception $e) {
					echo "exception1\n";
				}
			}
		}
	}
} catch (Exception $e) {
	echo "exception2\n";
}
?>
--EXPECTF--
Warning: in %s line 5: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!


Fatal error: Uncaught Exception in %stry_finally_022.php:6
Stack trace:
#0 %stry_finally_022.php(35): A->__destruct()
#1 {main}
  thrown in %stry_finally_022.php on line 35
