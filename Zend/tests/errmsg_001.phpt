--TEST--
errmsg: Non-abstract method must contain body
--FILE--
<?php

abstract class test {
}

class Impl extends Test {
	function Foo();
}

echo "Done\n";
?>
--EXPECTF--
Parse error: Non-abstract method Impl::Foo() must contain body in %s on line %d
