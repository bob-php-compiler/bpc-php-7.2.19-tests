--TEST--
Exception in __destruct while exception is pending
--FILE--
<?php

class TestFirst
{
	function __destruct() {
		throw new Exception("First");
	}
}

class TestSecond
{
	function __destruct() {
		throw new Exception("Second");
	}
}

$ar = array(new TestFirst, new TestSecond);

unset($ar);

?>
===DONE===
--EXPECTF--
Warning: in %s line %d: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line %d: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

===DONE===

Fatal error: Uncaught Exception: First in %sexception_008.php:%d
Stack trace:
#0 %sexception_008.php(%d): TestFirst->__destruct()
#1 {main}

Next Exception: Second in %sexception_008.php:%d
Stack trace:
#0 %sexception_008.php(%d): TestSecond->__destruct()
#1 {main}
  thrown in %sexception_008.php on line %d
