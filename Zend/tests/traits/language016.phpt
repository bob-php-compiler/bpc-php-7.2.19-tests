--TEST--
Invalid conflict resolution (unused trait as rhs of "insteadof")
--FILE--
<?php
trait T1 {
	function foo() {echo "T1\n";}
}
trait T2 {
        function foo() {echo "T2\n";}
}
class C {
	use T1 {
		T1::foo insteadof T2;
	}
}
--EXPECTF--
Parse error: selected and dropped should in trait list in %slanguage016.php on line %d
