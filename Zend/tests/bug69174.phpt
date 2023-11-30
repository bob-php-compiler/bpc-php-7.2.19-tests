--TEST--
Bug #69174 (leaks when unused inner class use traits precedence)
--FILE--
<?php
trait T1 {
    function foo() {}
    function bar() {}
}
trait T2 {
    use T1;
}
function test() {
	class C1 {
		use T1, T2 {
			T1::foo insteadof T2;
			T1::bar insteadof T2;
		}
	}
}
test();
?>
==DONE==
--EXPECT--
==DONE==
