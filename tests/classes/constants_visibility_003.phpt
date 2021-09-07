--TEST--
Class private constant visibility
--FILE--
<?php
class A {
	const privateConst = 'privateConst';
	static function staticConstDump() {
		var_dump(self::privateConst);
	}
	function constDump() {
		var_dump(self::privateConst);
	}
}

A::staticConstDump();
(new A())->constDump();
var_dump(constant('A::privateConst'));

?>
--EXPECTF--
string(12) "privateConst"
string(12) "privateConst"
string(12) "privateConst"
