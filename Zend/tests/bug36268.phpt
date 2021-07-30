--TEST--
Bug #36268 (Object destructors called even after fatal errors)
--FILE--
<?php
class Foo {
	function __destruct() {
		echo "Ha!\n";
	}
}
$x = new Foo();
bar();
?>
--EXPECTF--
Warning: in %s line 3: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!


Fatal error: Uncaught Error: Call to undefined function bar() in %sbug36268.php:8
Stack trace:
#0 {main}
  thrown in %sbug36268.php on line 8
Ha!
