--TEST--
method overloading with different method signature
--SKIPIF--
skip unsupported return reference from function/method
--INI--
error_reporting=8191
--FILE--
<?php

class test {
	function &foo() {}
}

class test2 extends test {
	function &foo() {}
}

class test3 extends test {
	function foo() {}
}

echo "Done\n";
?>
--EXPECTF--
Warning: Declaration of test3::foo() should be compatible with & test::foo() in %s on line %d
Done
