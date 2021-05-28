--TEST--
Bug #27468 (foreach in __destruct() causes segfault)
--FILE--
<?php
class foo {
	function __destruct() {
		foreach ($this->x as $x);
	}
}
new foo();
echo 'OK';
?>
--EXPECTF--
Warning: in %sbug27468.php line 3: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

OK
Notice: Undefined property: foo::$x in %sbug27468.php on line 4

Warning: Invalid argument supplied for foreach() in %sbug27468.php on line 4
