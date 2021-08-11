--TEST--
Bug #53511 (Exceptions are lost in case an exception is thrown in catch operator)
--FILE--
<?php
class Foo {
	function __destruct() {
		throw new Exception("ops 1");
	}
}

function test() {
	$e = new Foo();
	try {
		throw new Exception("ops 2");
	} catch (Exception $e) {
		echo $e->getMessage()."\n";
	}
}

test();
echo "bug\n";
--EXPECTF--
Warning: in %s line 3: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

ops 2
bug

Fatal error: Uncaught Exception: ops 1 in %sbug53511.php:4
Stack trace:
#0 %sbug53511.php(18): Foo->__destruct()
#1 {main}
  thrown in %sbug53511.php on line 18
