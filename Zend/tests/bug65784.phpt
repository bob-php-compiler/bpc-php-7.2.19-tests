--TEST--
Fixed Bug #65784 (Segfault with finally)
--FILE--
<?php
function foo1() {
	try {
		throw new Exception("not catch");
		return true;
	} finally {
		try {
			throw new Exception("catched");
		} catch (Exception $e) {
		}
	}
}
try {
	$foo = foo1();
	var_dump($foo);
} catch (Exception $e) {
	do {
		var_dump($e->getMessage());
	} while ($e = $e->getPrevious());
}

function foo2() {
	try  {
		try {
			throw new Exception("catched");
			return true;
		} finally {
			try {
				throw new Exception("catched");
			} catch (Exception $e) {
			}
		}
	} catch (Exception $e) {
	}
}

$foo = foo2();
var_dump($foo);

function foo3() {
	try {
		throw new Exception("not catched");
		return true;
	} finally {
		try {
			$classname = 'NotExists'; throw new $classname();
		} catch (Exception $e) {
		}
	}
}

$bar = foo3();
--EXPECTF--
string(9) "not catch"
NULL

Fatal error: Uncaught Error: Class 'NotExists' not found in %sbug65784.php:46
Stack trace:
#0 %sbug65784.php(52): foo3()
#1 {main}
  thrown in %sbug65784.php on line 52
