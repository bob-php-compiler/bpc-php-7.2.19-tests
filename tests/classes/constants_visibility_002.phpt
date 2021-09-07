--TEST--
Class protected constant visibility
--FILE--
<?php
class A {
	const protectedConst = 'protectedConst';
	static function staticConstDump() {
		var_dump(self::protectedConst);
	}
	function constDump() {
		var_dump(self::protectedConst);
	}
}

A::staticConstDump();
(new A())->constDump();
var_dump(constant('A::protectedConst'));

?>
--EXPECTF--
string(14) "protectedConst"
string(14) "protectedConst"
string(14) "protectedConst"
