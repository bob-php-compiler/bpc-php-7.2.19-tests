--TEST--
Invalid conflict resolution (unused trait as lhs of "as")
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
		T2::foo as private;
	}
}
--EXPECTF--
Parse error: trait name should in trait list in %slanguage017.php on line %d
